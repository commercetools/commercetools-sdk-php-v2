FROM debian:jessie-slim

LABEL "com.github.actions.name"="auto-create-pr-action"
LABEL "com.github.actions.description"="Auto create a pull request when a new branch is _pushed_"
LABEL "com.github.actions.icon"="activity"
LABEL "com.github.actions.color"="yellow"

RUN apt-get update && apt-get install -y jq curl wget git
COPY pull-request.sh /pull-request.sh

RUN chmod u+x /pull-request.sh
ENTRYPOINT ["/pull-request.sh"]
