
# Frontend Assignment

## Overview
This Assignment implements a custom Drupal theme and functionality for displaying event-related content. It features an introduction block, a tabbed event section with slider, and responsive design elements.

### Installation Steps

1. **Clone the Repository**  
   Download or clone the repository to your local machine. Use the following command:  
   ```bash
   git clone <repository-url>
   cd <repository-name>

2. **Install Dependencies** 
    Navigate to the codebase location and run the following command to install:
    ```bash
    composer install

3. **Import Database** 
    Import the database from the backups/database folder and update the database connection details in the settings.php or settings.local.php file

4. **Clear Cache** 
    After updating the settings, clear the cache to ensure all changes are applied

## Features
- Custom Block: A simple custom block for introduction content has been created and placed in the content region of the Block Layout.
- Event Card Content Type: A custom content type named Event Card has been created, which includes a Taxonomy field labeled Event Type. The Event Type field references a taxonomy list that serves as tab buttons for filtering events.
- Event Tab View: Events are displayed using Views as Block Display mode, with filtering criteria based on the selected Event Type.
- Event Tab view has been placed in Content region of Block Layout.

## Frontend Development
- Custom Theme: The theme Nova is built on Bootstrap 5, providing a responsive and modern design.
- Created Custom Twig template for Event View tab.
- Slick Slider: The Slick library is used for the slider functionality. 
- Custom mixins have been added for media queries and font styling to ensure the site is responsive across various devices.

## Note
- Database and File Sharing: Pushing the database and files to the repository is not recommended, but for sharing purposes, these files have been included in the backups directory.
- Screen Recording: A screen recording demonstrating the assignment can be found at ./backups/screen-recording.mp4.

## Conclusion
Thank you for reviewing this assignment. If you have any questions or feedback, feel free to reach out!
