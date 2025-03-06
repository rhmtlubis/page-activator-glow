
import { defineConfig } from 'vite'

export default defineConfig({
  // Base public path when served in development or production
  base: './',
  
  // Configure the server
  server: {
    port: 8080,
    open: true,
    host: true
  },
  
  // Build options
  build: {
    outDir: 'dist',
    assetsDir: 'assets',
    emptyOutDir: true
  }
})
