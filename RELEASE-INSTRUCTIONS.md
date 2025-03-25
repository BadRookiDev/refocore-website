Step 1: ```npm run prod```

Step 2: Commit Everything except the CNAME deletion.

Step 2: Push to master via the phpstorm UI.

Step 3: ```git subtree push --prefix build_production origin gh-pages```

Step 4: Git Rollback CNAME deletion, just to be sure.