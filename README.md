Inspiration:
Nowadays, information is vast and wide-spread, and being able to visualize data in a graphical format would be a huge asset, considering the following applications: -Business Marketing trends -Primary Educational research resource -Higher Educational purposes -Social Media analytics

What it does
Given a user-inputted keyword, the webapp begins scraping at several image databases, and extends its crawl to as many embedded links as necessary. The result is a list of visual graphics ordered by relevance. Relevance can be influenced by an user-inputted five-star review system. However, Relevance is chiefly determined through the web-crawling algorithm.

How we built it
The web app consists of a 2 page front end, built with HMTL, CSS, Bootstrap, Javascript and Jquery. After a keyword has been chosen by the user, a web spider is deployed by the scrapy cloud and produces a table of 9 images. As the user scrolls down a javascript script generates more table rows, until all possible images have been exhausted.

Challenges we ran into
Setting up the scrappy environment was our first biggest challenge. Establishing a conncection between the front end and backend also became a challenge towards the end of development.The main issue was processing the scraped data produced by the scrappy spider, for display to the front end. Additionally, scalability could also be an issue because all the scraped data is stored locally at this point. Future models will take advantage of amazonweb services.

Build with:
-> PHP
-> JavaScript
-> HTML5
-> CSS3

Build at: 
-> Electric City Hacks

Build by:
-> Prashant Patel
-> Ousmane Amadaou
-> Joseph
-> Kohilan Monaharajan
