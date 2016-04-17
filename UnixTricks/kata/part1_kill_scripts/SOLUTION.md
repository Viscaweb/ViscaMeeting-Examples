# Solutions

There are many ways to kill all those scripts:

### Solutions
* ps aux | grep '[k]ill-me' | awk '{ print $2 }' | xargs kill
* kill $(ps aux | grep '[k]ill-me' | awk '{ print $2 }')

### Explanations
* `ps aux` - list all processes
* `grep '[k]ill-me'` - filter the processes
* `awk '{ print $2 }'` - take the second part of each line (which is the **pid**)
* `xargs kill` - pass the ``pid`` to the kill function