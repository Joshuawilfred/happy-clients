import './bootstrap';

import { toggleTheme } from './theme';

document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('theme-toggle-checkbox').addEventListener('change', toggleTheme);
});