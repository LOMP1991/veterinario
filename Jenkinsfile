pipeline {
    agent any

    stages {
        stage('Clonar repo') {
            steps {
                git branch: 'main', url: 'https://github.com/LOMP1991/veterinario.git'
            }
        }

        stage('Copiar archivo .env') {
            steps {
                withCredentials([file(credentialsId: 'dotenv', variable: 'DOTENV_FILE')]) {
                    sh 'cp "$DOTENV_FILE" .env'
                }
            }
        }

        stage('Construir y levantar servicios') {
            steps {
                sh 'docker-compose up -d --build'
            }
        }

        stage('Verificar contenedor app') {
            steps {
                sh 'docker ps'
                sh 'docker-compose exec -T app php -v'
            }
        }

        stage('Tests (si tienes)') {
            steps {
                sh 'docker-compose exec -T app ./vendor/bin/phpunit || true'
            }
        }

        stage('Finalizar') {
            steps {
                sh 'docker-compose down'
            }
        }
    }
}
