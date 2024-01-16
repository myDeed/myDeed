# MyDeed Contract
This is a simple contract for managing files on a decentralized storage platform. The contract allows users to add files, share them with other users, and revoke access to shared files.

## Table of Contents
- Contract Variables
- Events
- Functions

## Contract Variables
The contract has the following state variables:

- `fileIdCounter`: A uint variable that keeps track of the next available file ID.
- `files`: A mapping that maps uint file IDs to File structs that contain information about each file.
- `fileShares`: A mapping that maps uint file IDs to a mapping of address to bool, which indicates whether each user has access to the file.

## Events
The contract uses the following events:

- `FileAdded`: Emitted when a new file is added to the contract.
- `FileShared`: Emitted when a file is shared with a user.
- `FileUnshared`: Emitted when a file is unshared from a user.

## Functions
The contract has the following functions:

- `addFile`: Allows the contract owner to add a new file to the contract.
- `shareFile`: Allows the contract owner to share a file with a user.
`unshareFile`: Allows the contract owner to unshare a file from a user.
- `getFile`: Allows users to retrieve information about a file.
addFile
Adds a new file to the contract.

Function Signature

```function addFile(string memory _name, string memory _content) public```

Parameters

- `_name`: The name of the file.
- `_content`: The content of the file.

Events Emitted

- `FileAdded`: Emitted with the new file's ID.

`shareFile`
Shares a file with a user.

Function Signature

```function shareFile(uint _fileId, address _user) public```

Parameters
- `_fileId`: The ID of the file to share.
- `_user`: The address of the user to share the file with.

Events Emitted

`FileShared`: Emitted with the file's ID and the user's address.

`unshareFile`
Unshares a file from a user.

Function Signature

```function unshareFile(uint _fileId, address _user) public```

Parameters

- `_fileId`: The ID of the file to unshare.
- `_user`: The address of the user to unshare the file from.

Events Emitted

- `FileUnshared`: Emitted with the file's ID and the user's address.

`getFile`
Retrieves information about a file.

Function Signature

```function getFile(uint _fileId) public view returns (string memory, string memory)```

Parameters
- `_fileId`: The ID of the file to retrieve information about.
Returns
- `_name`: The name of the file.
- `_content`: The content of the file.