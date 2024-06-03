import { defineConfig } from 'vite';

export default defineConfig({
	build: {
		assetsDir: './',
		rollupOptions: {
			input: {
				style: './src/styles/style.css',
				index: './src/scripts/index.ts',
			},
			output: {
				entryFileNames: '[name].js',
				chunkFileNames: '[name].js',
				assetFileNames: '[name].[ext]',
			},
		},
	},
});
