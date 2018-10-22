# Magento 2 Connector RestApi Extension 


**Connector RestApi Extension for Magento 2**  offers the users to create mobile Apps(iOS and Android).When you install this module using composer it creates Apis for your magento store

[![Stable Version!]:Magento 2.2




## 1. How to install SMTP Extension

### Install via composer (recommend)

Run the following command in Magento 2 root folder:

```
composer require mssbuilder/connector dev-master
php bin/magento setup:di:compile
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
sudo chmod  0777 -R  var/*
sudo chmod  0777 -R  generated/*
sudo chmod  0777 -R  pub/static/*
```
It will install module in vendor directory with name mssbuilder/connector
