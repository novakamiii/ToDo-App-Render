# ToDo-App-Render

#INSTRUCTIONS|
1. Create a copy of your previous ToDo-App
2. Open Render and add a new PostgreSQL
3. name it todo
4. select instance type to free
5. create database
6. wait for it to finish
7. Copy and paste the text from the github files I made into your copied folder from earlier
8. Go to compose.yaml and config.php and follow the comments I made
9. Copy the dockerfile and compose.yaml, put it outside the folder.
10. Open CMD from the copied ToDO-App and run docker init
11. php ver = 8.2, current directory, port 9000
12. After the process, put the copied dockerfile and compose.yaml files from earlier and into that folder.
13. After the proces, press v
14. On the docker destop, click the port (it is running locally)
15. Once okay and read your database. Time for render deployment
16. Open cmd to the folder and type docker images
17. copy the docker image info and type this docker tag dockerinfohere:latest yourusernaame/example_todo-app
18. go to render and add a new webservice
19. click existing image and type yourusername/example_todo-app:latest
20. Name it to yourn liking and select free instance
21. deploy webservice
