Behat/Zombie Demo
=================

This is a little repo to show my current behat/zombie setup

Installation
------------


MinkZombieDriver is dependant on two bug fixes that are waiting to be merged in
to Zombie 2.0, so I use my own fork for now

```
> cd ~/src
> git clone https://github.com/davedevelopment/zombie.git
> cd zombie
> git checkout for-mink
> cd ../
> npm install ./zombie
```
Install deps. I'm using my own zombie2 branch of MinkZombieDriver

```
> cd ~/src
> git clone http://github.com/davedevelopment/behat-zombie-demo
> cd behat-zombie-demo
> composer.phar install --dev
```

Running
-------

Either setup the web dir with your favourite web server (be sure to change the
base_url in `behat.yml.dist`, or use PHP >5.4

```
> cd ~/src/behat-zombie-demo
> php -S localhost:9898 web/index.php
PHP 5.4.8 Development Server started at Thu Nov  8 12:18:02 2012
Listening on http://localhost:9898
Document root is /home/davem/src/behat-zombie-demo
Press Ctrl-C to quit.
```

Then try running the tests

```
> cd ~/src/behat-zombie-demo
> bin/behat
Feature: Test

  Scenario: I click a button      # features/test.feature:4
    Given I am on "/"             # Behat\MinkExtension\Context\MinkContext::visit()
    And I press "Press Me"        # Behat\MinkExtension\Context\MinkContext::pressButton()
    Then I should see "Woop Woop" # Behat\MinkExtension\Context\MinkContext::assertPageContainsText()

1 scenario (1 passed)
3 steps (3 passed)
0m0.033s


```
