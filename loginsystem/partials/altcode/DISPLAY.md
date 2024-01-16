
# mydeed-display.html

## Overview

This HTML application provides a user-friendly interface for interacting with the mydeed smart contract, allowing users to:

- View a list of files they have access to.
- View file details, including the uploader's address and IPFS URL.
- Revoke access to files they own from other users.

## Requirements

- A web browser with MetaMask installed.
- A deployed instance of the mydeed smart contract.
- A config.json file containing the contract ABI and address.

## Usage

1. Open the HTML file in your web browser.
2. Connect your MetaMask wallet.
3. The application will automatically fetch and display files you have access to.
4. To revoke access to a file, click the "Revoke" button next to the file.

## Key Features

- **File Table:** Displays a list of files with columns for serial number, file name, uploader's address, IPFS URL, shared users, and revoke access buttons.
- **IPFS Integration:** Uses IPFS to store and access file content.
- **Access Revocation:** Allows owners to revoke access to their files from other users.

## Setup

1. Clone or download this repository.
2. Place the compiled mydeed smart contract's ABI and address in a config.json file in the same directory as the HTML file.
3. Open the HTML file in a web browser with MetaMask connected.

## Additional Information

- **Security:** The application relies on MetaMask for user authentication and transaction signing.
- **IPFS:** Ensure IPFS is configured correctly for file retrieval.
- **Error Handling:** The application includes basic error handling, but more comprehensive error handling may be needed for production environments.