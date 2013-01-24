Feature: Reaching the website

  Scenario: I can load the homepage and see the site logo
    Given I visit the homepage
    Then I should see the site logo

  Scenario: I can load the homepage and see the site title
    Given I visit the homepage
    Then I should see the site title

  Scenario: I can load the homepage and see the Hello World title
    Given I visit the homepage
    Then I should see the Hello World title

  Scenario: I can load the homepage and see correct page text
    Given I visit the homepage
    Then I should see "Made by David Amanshia of Golden Contact Computing."

  Scenario: I can load the homepage and see the footer
    Given I visit the homepage
    Then I should see the footer