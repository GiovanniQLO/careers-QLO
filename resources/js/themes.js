// Theme management system
class ThemeManager {
    constructor() {
        this.themes = {
            'default': {
                name: 'Default',
                primaryColor: '#007bff',
                secondaryColor: '#6c757d',
                backgroundColor: '#ffffff',
                textColor: '#212529'
            },
            'dark': {
                name: 'Dark Mode',
                primaryColor: '#0d6efd',
                secondaryColor: '#6c757d',
                backgroundColor: '#212529',
                textColor: '#ffffff'
            },
            'blue': {
                name: 'Ocean Blue',
                primaryColor: '#0d6efd',
                secondaryColor: '#0dcaf0',
                backgroundColor: '#e7f1ff',
                textColor: '#0a58ca'
            },
            'green': {
                name: 'Forest Green',
                primaryColor: '#198754',
                secondaryColor: '#20c997',
                backgroundColor: '#d1e7dd',
                textColor: '#0a3622'
            },
            'purple': {
                name: 'Royal Purple',
                primaryColor: '#6f42c1',
                secondaryColor: '#d63384',
                backgroundColor: '#e2e3e5',
                textColor: '#41464b'
            }
        };
        
        this.currentTheme = localStorage.getItem('selectedTheme') || 'default';
        this.init();
    }
    
    init() {
        this.applyTheme(this.currentTheme);
        this.createThemeSelector();
        this.bindEvents();
    }
    
    applyTheme(themeName) {
        const theme = this.themes[themeName];
        if (!theme) return;
        
        // Apply CSS custom properties
        document.documentElement.style.setProperty('--primary-color', theme.primaryColor);
        document.documentElement.style.setProperty('--secondary-color', theme.secondaryColor);
        document.documentElement.style.setProperty('--background-color', theme.backgroundColor);
        document.documentElement.style.setProperty('--text-color', theme.textColor);
        
        // Apply theme class to body
        document.body.className = document.body.className.replace(/theme-\w+/g, '');
        document.body.classList.add(`theme-${themeName}`);
        
        this.currentTheme = themeName;
        localStorage.setItem('selectedTheme', themeName);
    }
    
    createThemeSelector() {
        // Create theme selector dropdown if it doesn't exist
        let themeSelector = document.getElementById('theme-selector');
        if (!themeSelector) {
            themeSelector = document.createElement('div');
            themeSelector.id = 'theme-selector';
            themeSelector.className = 'theme-selector dropdown';
            
            const button = document.createElement('button');
            button.className = 'btn btn-outline-secondary dropdown-toggle';
            button.type = 'button';
            button.id = 'themeDropdown';
            button.setAttribute('data-bs-toggle', 'dropdown');
            button.setAttribute('aria-expanded', 'false');
            button.innerHTML = `Theme: ${this.themes[this.currentTheme].name}`;
            
            const menu = document.createElement('ul');
            menu.className = 'dropdown-menu';
            menu.setAttribute('aria-labelledby', 'themeDropdown');
            
            Object.keys(this.themes).forEach(themeKey => {
                const menuItem = document.createElement('li');
                const link = document.createElement('a');
                link.className = 'dropdown-item';
                link.href = '#';
                link.dataset.theme = themeKey;
                link.textContent = this.themes[themeKey].name;
                
                if (themeKey === this.currentTheme) {
                    link.classList.add('active');
                }
                
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.selectTheme(themeKey);
                });
                
                menuItem.appendChild(link);
                menu.appendChild(menuItem);
            });
            
            themeSelector.appendChild(button);
            themeSelector.appendChild(menu);
            
            // Add to the navbar if it exists
            const navbar = document.querySelector('.navbar');
            if (navbar) {
                const container = navbar.querySelector('.container');
                if (container) {
                    container.appendChild(themeSelector);
                }
            } else {
                // If no navbar, add to body
                document.body.insertBefore(themeSelector, document.body.firstChild);
            }
        }
    }
    
    selectTheme(themeName) {
        this.applyTheme(themeName);
        
        // Update dropdown button text
        const dropdownButton = document.querySelector('#theme-selector .dropdown-toggle');
        if (dropdownButton) {
            dropdownButton.innerHTML = `Theme: ${this.themes[themeName].name}`;
        }
        
        // Update active state in dropdown
        document.querySelectorAll('#theme-selector .dropdown-item').forEach(item => {
            item.classList.toggle('active', item.dataset.theme === themeName);
        });
    }
    
    bindEvents() {
        // Listen for theme changes from other tabs/windows
        window.addEventListener('storage', (e) => {
            if (e.key === 'selectedTheme' && e.newValue !== this.currentTheme) {
                this.applyTheme(e.newValue);
            }
        });
    }
}

// Initialize theme manager when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new ThemeManager();
});