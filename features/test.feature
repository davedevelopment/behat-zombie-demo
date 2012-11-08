Feature: Test 


    @mink:zombie
    Scenario: I click a button
        Given I am on "/"
        And I press "Press Me"
        Then I should see "Woop Woop"
