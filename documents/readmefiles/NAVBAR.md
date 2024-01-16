# mydeed-navbar.html

## Overview

This HTML file defines the navigation bar for the myDeed application, providing buttons for navigation, wallet connection, and returning to the main page.

## Structure

- **Head:** Includes title, stylesheet link, and MetaMask library import.
- **Body:**
    - **Navbar Div:** Contains the navigation elements and logo.
    - **Buttons:**
        - Upload Files
        - My Files
        - Share Access
        - Go back to Main Page
        - Connect Wallet (dynamically updated to display connection status)
    - **Logo:** Clickable to return to the home page.

## JavaScript Functionality

- **checkConnectionAndLoad(page):**
    - Checks if MetaMask is connected.
    - If connected, loads the specified page in the `mainContent` frame.
    - If not connected, alerts the user to connect first.
- **connectWallet():**
    - Requests account access from MetaMask.
    - If successful, updates connection status, stores wallet address in localStorage, and loads `mydeed.html` in the `mainContent` frame.
    - Handles errors and alerts the user accordingly.

## Interactions with Other Files

- **Loaded into an iframe (likely by `mydeed.html`).**
- **Interacts with `mydeed.html` using `parent.mainContent.location.href` to load pages.**
- **Stores and retrieves the connected wallet address in localStorage, shared with other application pages.**

## Considerations

- **Frame Communication:** Ensure proper communication between the navigation bar frame and the main content frame using `parent` references.
- **LocalStorage Usage:** Consider security implications of storing the wallet address in localStorage.
- **Accessibility:** Ensure the navigation bar is accessible to users with screen readers or keyboard navigation.
- **Styling:** The `styles.css` file is not included here but is important for visual presentation.