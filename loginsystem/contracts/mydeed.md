# mydeed

## Overview

This Solidity smart contract enables users to track and manage ownership and access rights to files on the Ethereum blockchain.

## Key Features

- **File Registration:** Users can add files to the contract by providing their hash and filename.
- **Access Control:** Owners can grant or revoke access to specific users for their files.
- **File Tracking:** The contract maintains a record of file ownership, shared users, and access history.
- **Information Retrieval:** Users can view a list of files they have access to, along with their hashes and the original owner's address.
- **Shared Users Listing:** Owners can retrieve a list of users who have been granted access to a specific file.

## Usage

**Available Functions:**

1. **add(string memory hash, string memory fileName):** Adds a new file to the contract.
2. **allow(string memory hash, address user):** Grants access to a file for a specific user.
3. **disallow(string memory hash, address user):** Revokes access to a file from a user.
4. **display():** Returns a list of files the user has access to, along with their hashes and uploader addresses.
5. **getSharedUsers(string memory hash):** Returns a list of users who have been granted access to a specific file.

## Requirements

- Solidity version ^0.8.0 or above
- An Ethereum blockchain environment

## Installation

1. Clone or download this repository.
2. Compile the contract using a Solidity compiler, such as Truffle or Hardhat.
3. Deploy the compiled contract to an Ethereum network.

## License

This project is licensed under the MIT License.

## Additional Information

- **Owner:** The contract's owner can manage its functions and permissions.
- **Events:** The contract emits events to track file additions, access grants, and access revocations.
- **Security Considerations:**
    - Ensure proper access control mechanisms to protect sensitive data.
    - Conduct thorough testing and security audits before deployment.

