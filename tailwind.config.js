module.exports = {
    content: require('fast-glob').sync([
        'source/**/*.{blade.php,blade.md,md,html,vue}',
        '!source/**/_tmp/*' // exclude temporary files
    ], {dot: true}),
    theme: {
        container: {
            screens: {
                sm: '600px',
                md: '728px',
                lg: '984px',
                xl: '1240px',
            },
        },
        extend: {},
    },
    plugins: [
        require('daisyui'),
    ],
    daisyui: {
        themes: [{
            refotheme: {
                'primary': "#e4f03e",
                'primary-content': "#F2F89F",
                'secondary': "#3ef0ea",
                'secondary-content': "#9FF8F5",
                'accent': "#788eff",
                'accent-content': "#BCC7FF",
                'base-100': '#ffffff',
                'neutral': '#535357'
            },
            refodark: {
                'primary': "#e4f03e",
                'primary-content': "#858D39",
                'secondary': "#3ef0ea",
                'secondary-content': "#328D8F",
                'accent': "#788eff",
                'accent-content': "#4F5C9A",
                'base-100': '#262934',
                'neutral': '#d8dbe1'
            }
        }]
    },
    darkMode: 'selector'
};
