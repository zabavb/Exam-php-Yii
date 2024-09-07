<p align="center">
  <img src="https://img.icons8.com/external-those-icons-flat-those-icons/100/external-PHP-programming-and-development-those-icons-flat-those-icons.png" alt="Exam PHP Yii Logo" width="120" height="120">
</p>

<h1 align="center">Exam PHP Yii</h1>

<h2>Project Overview</h2>
<p>Exam PHP Yii is a web application developed using the PHP Yii framework. This project serves as a platform for demonstrating core web development skills using Yii's powerful architecture.</p>

<h2>Project Details</h2>
<ul>
  <li><strong>Languages:</strong> 
    <a href="https://www.php.net/" target="_blank">
      <img src="https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white" alt="PHP">
    </a>
  </li>
  <li><strong>Framework:</strong> 
    <a href="https://www.yiiframework.com/" target="_blank">
      <img src="https://img.shields.io/badge/Yii%202.0-FF6000?style=flat&logo=yii&logoColor=white" alt="Yii 2.0">
    </a>
  </li>
  <li><strong>Project Type:</strong> 
    <a href="https://www.yiiframework.com/doc/guide/2.0/en/start-installation" target="_blank">
      <img src="https://img.shields.io/badge/Yii%20Application-FF6000?style=flat&logo=yii&logoColor=white" alt="Yii Application">
    </a>
  </li>
</ul>

<h2>Development Details</h2>
<p>This project was created as part of an exam assignment. It was developed exclusively by me using PHP and the Yii framework.</p>

<h2>Getting Started</h2>
<p>To get started with this project, follow the official Yii framework documentation to set up your environment and install dependencies:</p>
<a href="https://www.yiiframework.com/doc/guide/2.0/en/start-installation" target="_blank">Yii Framework Installation Guide</a>

<pre><code>
git clone https://github.com/zabavb/Exam_php_Yii.git
cd Exam_php_Yii
composer install
</code></pre>

<p>Once you have the project set up, you can run the Yii application using:</p>
<pre><code>
php yii serve
</code></pre>

<h2>Features</h2>
<ul>
  <li><strong>Web Application Development:</strong> Leverages the MVC architecture of the Yii framework for building robust, maintainable web applications.</li>
  <li><strong>Database Support:</strong> Easily integrated with databases using Yii’s ORM layer.</li>
</ul>

<h2>Usage</h2>
<p>To use this application, clone the repository and install the necessary dependencies using Composer. Configure your database connection in the `config/db.php` file if needed.</p>

<h2>Contributing</h2>
<p>Contributions are welcome! If you have any suggestions or improvements, feel free to fork the repository and submit a pull request.</p>
<ol>
  <li>Fork the Repository: Click the "Fork" button at the top-right of this page.</li>
  <li>Create a Branch: Create a new branch for your changes.</li>
  <li>Commit Changes: Make your changes and commit them with a descriptive message.</li>
  <li>Push to Your Fork: Push your changes to your forked repository.</li>
  <li>Submit a Pull Request: Go to the "Pull Requests" tab and submit a new pull request.</li>
</ol>

<h2>Contact</h2>
<p>For any questions or inquiries, you can reach me at <a href="mailto:bilonizkavik@agmail.com">bilonizkavik@agmail.com</a> or connect with me on <a href="https://www.linkedin.com/in/viktor-bilonizhka" target="_blank">LinkedIn</a>.</p>

<h2>References</h2>
<ul>
  <li><a href="https://www.php.net/docs.php" target="_blank">PHP Documentation</a></li>
  <li><a href="https://www.yiiframework.com/doc/guide/2.0/en" target="_blank">Yii 2.0 Guide</a></li>
</ul>

<h2>Acknowledgements</h2>
<ul>
  <li>Thanks to the IT Step Computer Academy for the educational support.</li>
  <li>Special thanks to the open-source community for their resources and tools.</li>
</ul>

<hr>

<p align="center">Feel free to modify or extend this README to fit your needs better. Happy coding!</p>

<hr>

<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

Yii 2 Advanced Project Template is a skeleton [Yii 2](https://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![build](https://github.com/yiisoft/yii2-app-advanced/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-advanced/actions?query=workflow%3Abuild)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
