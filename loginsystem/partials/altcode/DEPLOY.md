# mydeed-deploy.js

## Overview

This script automates the deployment of the myDeed smart contract using Hardhat.

## Structure

- **Imports:**
    - `require("hardhat")`: Imports the Hardhat library for interacting with Ethereum networks.
- **main() function:**
    - Logs a message indicating deployment start.
    - Retrieves the deployer's account address.
    - Records deployment start time.
    - Deploys the contract named "mydeed" using Hardhat's deployment functions.
    - Waits for deployment completion.
    - Records deployment end time and calculates duration.
    - Logs the deployed contract address and deployment time.
    - Catches and logs any errors during deployment.

## Functionality

1. **Initialization:**
    - Imports the Hardhat library.
2. **Deployer Identification:**
    - Fetches the deployer's account address using `hre.ethers.getSigners()`.
3. **Deployment:**
    - Initiates contract deployment using `hre.ethers.deployContract("mydeed")`.
    - Waits for completion using `await upload.waitForDeployment()`.
4. **Logging:**
    - Records deployment time and logs the deployed contract address.
5. **Error Handling:**
    - Catches and logs any errors, setting a non-zero exit code for failure indication.

## Considerations

- **Hardhat Configuration:** Ensure Hardhat is properly configured with the desired network and contract settings.
- **Gas Costs:** Deployment requires gas, which must be available in the deployer's account.
- **Network:** Specify the desired network for deployment (e.g., local network, testnet, mainnet).
- **Contract Address:** Note the deployed contract address for future interactions.