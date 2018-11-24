# Web Dev - Introduction to Web 3.0

![status](https://badgen.net/badge/Status/on%20standby/grey) 
![version](https://badgen.net/badge/Version/~0.1/cyan)
![licence](https://badgen.net/badge/Licence/no_licence/blue)

The goal was to create a website that would classified Wikipedia data using a Triple-store database linked to the wikidata project. The classification process was based on a simplified version of the ranking algorithms used by search engines such as bing or duckduckgo.

*Nota :* Obviously, github.io does not support PHP, to see the website, install a web server and put those files into the root.
If you are a beginner, I recommend to use EasyPHP-Webserver/Devserver which pack everything you need.

## I - Understanding the concepts

### 1. What is semantic web / web 3.0 ?
- https://en.wikipedia.org/wiki/Semantic_Web#Web_3.0
- https://www.w3.org/standards/semanticweb/

### 2. Wikipedia and DBpedia
- https://en.wikipedia.org/wiki/DBpedia
- https://en.wikipedia.org/wiki/Wikipedia:About
- http://wiki.dbpedia.org/Documentation
- http://wiki.dbpedia.org/services-resources/documentation/phpframework

### 3. RDF & SPARQL
- https://en.wikipedia.org/wiki/Linked_data
- https://en.wikipedia.org/wiki/Resource_Description_Framework
- https://www.w3.org/2009/sparql/wiki/Main_Page
- https://www.w3.org/TR/rdf-sparql-query/

## II - The project

### 1. How does it works ?
![Project Architecture](IMG_Web/Architecture.png? "Project Architecture")

#### Important :
- To access the triple-store, we use [DBpedia Virtuoso SPARQL Query Editor](http://dbpedia.org/sparql)
- The Classification is assured by [DBpedia PageRank](http://people.aifb.kit.edu/ath/)

### 2. Results

#### 2.1. Landing page
![Landing page](IMG_Web/Accueil%201.PNG? "Landing page")
![Landing page 2](IMG_Web/Accueil%202.PNG? "Landing page 2")

#### 2.2. Search Engine
![Search Engine](IMG_Web/moteur%20de%20recherche.PNG? "Search Engine")

#### 2.3. Valid Request [FR]
![Request FR](IMG_Web/requête%20valide%20français.PNG? "Request FR")
![Result FR](IMG_Web/requête%20valide%20français%202.PNG? "Result FR")

#### 2.4. Valid Request [EN]
![Request EN](IMG_Web/requête%20valide%20anglais.PNG? "Request EN")
![Result EN](IMG_Web/requête%20valide%20anglais%202.PNG? "Result EN")

## Built With
* [Notepad++](https://notepad-plus-plus.org/) - Simple text editor
* [EasyPHP-Webserver/Devserver](https://www.easyphp.org/) - Easy to use WebDev Pack

* Wanna learn HTLM5, CSS3, Bootstrap, Javascript JSON, SPARQL and more ?
* Check that out : [codecademy](https://www.codecademy.com/), [w3schools](https://www.w3schools.com/html/), [codewars](https://www.codewars.com/)

## Authors

See the list of [contributors](https://github.com/GrayDevs/SemanticWeb/contributors) who participated in this project.

Special thanks to :
* **[Andreas Thalhammer](http://www.aifb.kit.edu/web/Andreas_Thalhammer/en)** - *PageRank Algorithm*
