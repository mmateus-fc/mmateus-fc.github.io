# Cyberpunk CV Website

A modern, cyberpunk-themed CV/portfolio website built with HTML, CSS, and JavaScript featuring glassmorphism effects, neon lighting, and interactive animations.

## Features

- **Cyberpunk Aesthetic**: Dark theme with neon blue/purple color scheme
- **Glassmorphism Effects**: Translucent panels with backdrop blur
- **Interactive Animations**: Smooth transitions, hover effects, and scroll animations
- **Responsive Design**: Mobile-friendly layout that adapts to all screen sizes
- **Loading Screen**: Animated loading sequence with progress bar
- **Navigation**: Smooth scrolling navigation with active section highlighting
- **Project Filtering**: Interactive project portfolio with category filters
- **Contact Form**: Functional contact form with validation
- **Skill Bars**: Animated progress bars for technical skills
- **Timeline**: Interactive experience timeline with glassmorphism cards

## Sections

1. **Hero Section**: Profile image, name, title, and call-to-action buttons
2. **About**: Personal description, core skills, and education
3. **Experience**: Timeline of work experience with detailed descriptions
4. **Projects**: Filterable portfolio of projects with descriptions and tags
5. **Skills**: Technical skills organized by category with progress indicators
6. **Contact**: Contact information and functional contact form

## Technologies Used

- **HTML5**: Semantic markup and structure
- **CSS3**: Advanced styling with custom properties, animations, and responsive design
- **JavaScript**: Interactive functionality and animations
- **Google Fonts**: Orbitron and Rajdhani font families

## File Structure

```
cv-website/
├── index.html              # Main HTML file
├── assets/
│   ├── css/
│   │   └── style.css       # Main stylesheet
│   ├── js/
│   │   └── script.js       # JavaScript functionality
│   └── images/             # Image assets
│       ├── personal_logo.png
│       ├── tech_icons_set.png
│       ├── social_media_icons.png
│       └── layout mockups...
└── README.md               # This file
```

## Customization

### Colors
The color scheme can be customized by modifying the CSS custom properties in `style.css`:

```css
:root {
    --primary-bg: #0a0a0f;
    --primary-cyan: #00ffff;
    --neon-purple: #9933ff;
    --electric-pink: #ff0099;
    /* ... other color variables */
}
```

### Content
Update the following in `index.html`:
- Replace "YOUR NAME" with your actual name
- Update contact information (email, phone, location)
- Modify experience descriptions and dates
- Add your own projects and skills
- Replace placeholder images with your photos

### Fonts
The website uses Google Fonts (Orbitron and Rajdhani). To change fonts, update the Google Fonts link in the HTML head and modify the font family variables in CSS.

## Browser Compatibility

- Chrome 60+
- Firefox 55+
- Safari 12+
- Edge 79+

## Performance Features

- Optimized CSS animations
- Throttled scroll events
- Image preloading
- Efficient DOM manipulation

## Installation

1. Download or clone the project files
2. Open `index.html` in a web browser
3. No build process or dependencies required

## License

This project is open source and available under the MIT License.

## Credits

- Design inspired by cyberpunk aesthetics and modern web design trends
- Icons created using custom SVG graphics
- Animations and effects built with pure CSS and JavaScript

