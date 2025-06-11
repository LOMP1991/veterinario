pipeline {
    agent any

    environment {
        COMPOSE_FILE = 'docker-compose.yml'
    }

    stages {
        stage('Clonar') {
            steps {
                git 'https://github.com/LOMP1991/veterinario.git'
            }
        }

        stage('Construir contenedor') {
            steps {
                sh 'docker-compose build'
            }
        }

        stage('Levantar aplicación') {
            steps {
                sh 'docker-compose up -d'
            }
        }

        stage('Migrar base de datos') {
            steps {
                sh 'docker exec veterinario_app touch database/database.sqlite'
                sh 'docker exec veterinario_app php artisan migrate --force'
            }
        }
    }
}
