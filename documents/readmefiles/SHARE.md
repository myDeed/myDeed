# mydeed-share.html

## Overview

This HTML file provides functionality for users to share access to their files with other users on the myDeed platform.

## Structure

- **Head:**
    - Includes title, stylesheet link, and MetaMask library import.
    - Contains inline styles for basic layout and appearance.
- **Body:**
    - **Container Div:** Holds form elements and button.
    - **Heading:** "GRANT ACCESS TO OTHER USERS"
    - **File Dropdown:** Displays available files for sharing.
    - **User Address Input:** Accepts the Ethereum address of the user to grant access.
    - **Share Access Button:** Triggers the sharing process.

## JavaScript Functionality

- **loadContractConfig():** Fetches contract configuration from `config.json`.
- **populateFilesDropdown(contract, accounts):**
    - Fetches file names and hashes from the contract.
    - Populates the dropdown with options for each file.
- **shareAccess():**
    - Validates user input.
    - Checks if the user is already a shared user.
    - Calls the `allow` function on the contract to grant access.
    - Alerts the user about the result and redirects to `display.html`.
- **window.addEventListener('load'):**
    - Initializes Web3 with MetaMask.
    - Fetches contract configuration and deploys contract instance.
    - Populates the files dropdown.

## Interactions with Other Files

- **Depends on `config.json` for contract details.**
- **Interacts with the smart contract to fetch file information and grant access.**
- **Redirects to `display.html` after successful sharing.**

## Considerations

- **Error Handling:** Ensure proper error handling for contract interactions and user input validation.
- **Security:** Consider security implications of trusting data from the contract and potential vulnerabilities in contract logic.
- **User Experience:** Provide clear feedback to the user about the sharing process and any errors that may occur.
- **Dependencies:** Manage dependencies like `config.json` and the smart contract deployment.