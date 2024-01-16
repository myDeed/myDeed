# mydeed-upload.html

## Overview

This HTML file provides functionality for users to upload files to IPFS using Pinata and store their IPFS hashes on the myDeed blockchain.

## Structure

- **Head:**
    - Includes title, stylesheet link, and Web3 library import.
    - Contains inline styles for basic layout and appearance.
- **Body:**
    - **Container Div:** Holds form elements, button, and IPFS hash display.
    - **Heading:** "Upload your file"
    - **File Name Input:** Accepts the file's name.
    - **File Input:** Allows file selection.
    - **Upload Button:** Triggers the upload process.
    - **IPFS Hash Input:** Displays the generated IPFS hash after upload.

## JavaScript Functionality

- **uploadBtn.addEventListener('click', async () => { ... })**
    - Validates user input (file name and file selection).
    - Fetches configuration from `config.json`.
    - Uploads the file to IPFS using Pinata's API.
    - Retrieves the IPFS hash from the Pinata response.
    - Displays the IPFS hash in the designated input field.
    - Initializes Web3 with MetaMask.
    - Deploys a contract instance using the contract ABI and address.
    - Calls the `add` function on the contract to store the IPFS hash and file name.
    - Alerts the user about successful upload and redirects to `display.html`.
    - Handles errors during Pinata upload or contract interaction.

## Interactions with Other Files

- **Depends on `config.json` for Pinata API keys and contract details.**
- **Interacts with the Pinata API for file uploads.**
- **Interacts with the smart contract to store IPFS hashes.**
- **Redirects to `display.html` after successful upload.**

## Considerations

- **Error Handling:** Ensure proper error handling for Pinata interactions, contract interactions, and user input validation.
- **Security:** Consider security implications of trusting Pinata's service and potential vulnerabilities in contract logic.
- **User Experience:** Provide clear feedback to the user about the upload process and any errors that may occur.
- **Dependencies:** Manage dependencies like `config.json`, the Pinata API, and the smart contract deployment.