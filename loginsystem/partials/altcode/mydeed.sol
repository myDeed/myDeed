// SPDX-License-Identifier: MIT
pragma solidity ^0.8.0;

contract mydeed {
    address public owner;
    struct File {
        address owner;
        string hash;
        string fileName;
        mapping(address => bool) sharedWith;
        address[] sharedUsers; // Add this array to track shared users
    }

    mapping(string => File) private files;
    mapping(address => string[]) private userFiles;

    event FileAdded(address indexed owner, string fileName, string hash);
    event AccessGranted(address indexed owner, address indexed sharedWith, string fileName);
    event AccessRevoked(address indexed owner, address indexed sharedWith, string fileName);

    constructor() {
        owner = msg.sender;
    }

    function add(string memory hash, string memory fileName) public {
        require(files[hash].owner == address(0), "File already added");
        File storage newFile = files[hash];
        newFile.owner = msg.sender;
        newFile.hash = hash;
        newFile.fileName = fileName;
        userFiles[msg.sender].push(hash);
        emit FileAdded(msg.sender, fileName, hash);
    }

    function allow(string memory hash, address user) public {
    require(files[hash].owner == msg.sender, "Only the owner can share access");
    require(user != msg.sender, "Cannot share with self");
    require(!files[hash].sharedWith[user], "Already shared with this address");

    files[hash].sharedWith[user] = true;
    files[hash].sharedUsers.push(user); // Add user to sharedUsers
    userFiles[user].push(hash);

    emit AccessGranted(msg.sender, user, files[hash].fileName);
}


    function disallow(string memory hash, address user) public {
        require(files[hash].owner == msg.sender, "Only the owner can revoke access");
        require(files[hash].sharedWith[user], "User does not have access");
        files[hash].sharedWith[user] = false;

        // Remove user from sharedUsers
        for(uint i = 0; i < files[hash].sharedUsers.length; i++) {
            if(files[hash].sharedUsers[i] == user) {
                files[hash].sharedUsers[i] = files[hash].sharedUsers[files[hash].sharedUsers.length - 1];
                files[hash].sharedUsers.pop();
                break;
            }
        }

        emit AccessRevoked(msg.sender, user, files[hash].fileName);
    }

    function display() public view returns (
    string[] memory fileNames, 
    string[] memory fileHashes, 
    address[] memory uploaderAddresses) // Add an array for uploader addresses
{
    string[] storage hashes = userFiles[msg.sender];
    fileNames = new string[](hashes.length);
    fileHashes = new string[](hashes.length);
    uploaderAddresses = new address[](hashes.length); // Initialize the uploaderAddresses array

    for (uint i = 0; i < hashes.length; i++) {
        if (files[hashes[i]].owner == msg.sender || files[hashes[i]].sharedWith[msg.sender]) {
            fileNames[i] = files[hashes[i]].fileName;
            fileHashes[i] = hashes[i];
            uploaderAddresses[i] = files[hashes[i]].owner; // Store the owner's address
        }
    }
    return (fileNames, fileHashes, uploaderAddresses);
}
function getSharedUsers(string memory hash) public view returns (address[] memory) {
    return files[hash].sharedUsers;
}
}
