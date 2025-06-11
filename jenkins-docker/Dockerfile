FROM jenkins/jenkins:lts

USER root

# Instalar Docker CLI y Docker Compose
RUN apt-get update && \
    apt-get install -y docker.io docker-compose && \
    usermod -aG docker jenkins

USER jenkins
