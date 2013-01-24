Given /^I visit the homepage$/ do
  visit "/index.php"
end

Then /^I should see "([^"]*)"$/ do |phrase|
  page.text.should =~ /#{phrase}/
end

Then /^I should see a "(.*?)" message$/ do |msg|
  page.text.should =~ /#{msg}/
end

Then /^I should see the field "([^"]*)"$/ do |phrase|
  find('#'+phrase)
end

Then /^I should see the site logo$/ do
  find('a#logo img')
end

Then /^I should see the site title/ do
  find('div#name-and-slogan h1#site-name a span')
end

Then /^I should see the Hello World title/ do
  find('div#block-gc-helloworld-gc-helloworld h2')
end

Then /^I should see the footer/ do
  page.text should =~ "Brought to you by Golden Contact Computing"
end
