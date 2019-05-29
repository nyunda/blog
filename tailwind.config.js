let defaultConfig = require('tailwindcss/defaultConfig')

module.exports = {
	theme: {
		extend: {
			maxWidth: {
				'5xl': '60rem',
		    },
		    colors: {
		    	black: '#1f2e41',
		    }
		},
	},
	variants: {
		width: ['responsive', 'focus', 'hover'],
	},
	plugins: [
		function({ addUtilities }) {
			const newUtilities = {
				'.transition-fast': {
					transition: 'all .2s ease-out',
				},
				'.transition': {
					transition: 'all .5s ease-out',
				},
			}

			addUtilities(newUtilities)
		}
	]
}
