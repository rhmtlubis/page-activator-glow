
# Wedding Invitation

This is a beautiful wedding invitation website for Selpia & Ernest.

## Setup Instructions

1. Place all files in your web server directory (e.g., htdocs, www)
2. Add a `music.mp3` file to the root directory for background music
3. Customize the content in `index.php` for your specific wedding details
4. Access the website through your local server (e.g., http://localhost/wedding-invitation)

## Features

- Beautiful animated wedding invitation
- RSVP functionality
- Countdown timer to the wedding date
- Mobile-responsive design
- Background music

## Important Note for Lovable Users

When running this project with Lovable, add the following to your package.json file manually:

```json
"scripts": {
  "build:dev": "vite build --mode development",
  "dev": "vite"
}
```

This is necessary because Lovable requires the "build:dev" script to build the project.
