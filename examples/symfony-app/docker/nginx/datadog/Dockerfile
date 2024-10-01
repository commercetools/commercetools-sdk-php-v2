# Use the official Nginx image
FROM nginx:latest

# Copy the Nginx configuration file for your Symfony application
COPY symfony.conf /etc/nginx/conf.d/default.conf

# Healthcheck to ensure Nginx is running
HEALTHCHECK --interval=30s --timeout=5s \
   CMD curl -f http://localhost/ || exit 1

# Expose port 80 to the host
EXPOSE 80
