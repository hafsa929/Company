/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',  // جميع ملفات Blade
    './resources/**/*.js',         // جميع ملفات JavaScript
    './resources/**/*.vue',        // لو تستخدم Vue
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif', 
               'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
      },
    },
  },
  plugins: [],
}
