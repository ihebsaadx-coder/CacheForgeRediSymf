## Versions Used  
- Symfony: 6.1.*
- Redis:
- Predis: v3.0.0-alpha1
- Snc Redis Bundle: ^4.8
  
Configuring `Predis` with Symfony can be a bit of a pain due to the complexity of the setup.

I have added missing Redis commands  that were not natively supported in the version being used.

The entire Symfony application is wrapped in a Docker container.

Redis is also containerized, allowing seamless integration with the Symfony application.

To properly access your containerized application, you need to configure your domain in the /etc/hosts
