# Image Upload with Validation Example

This example shows how to upload an image with validation checks for file type, size, and preventing duplicate uploads.

## Features:
- Validate that the file is an image (JPG, PNG, JPEG, GIF).
- Ensure the file size is under 500KB.
- Prevent uploading the same image twice.

## File Structure:

- **upload.php:** HTML form for image upload
- **index.php:** PHP script to handle image upload and validation
- **uploads/:** Directory where uploaded images are stored

## How to Use:

### Requirements
- **PHP-Enable Web Server:** You need a web server that supports PHP, such as [XAMPP] (http://localhost/Upload-files/upload.php),
or a hosting service that supports PHP.

### Steps

1. **Download the Files:**
   - Download the Upload files from this repository.
2. **Set Up local Server:**
    - If you are using a local server like XAMPP:
        - Copy the PHP files into the `htdocs` folder.
        - Start the Apache from the control panel of the tool.
3. **Open the Form:**
     - Open your web browser and navigate to the following URL:
           ```
           http://localhost/Upload-files/upload.php
           ```

### Notes:
- The uploaded files are stored in the `uploads/` directory.
