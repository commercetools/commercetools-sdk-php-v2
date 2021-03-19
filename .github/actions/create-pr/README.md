# Automated Branch Pull Requests

This action will open a pull request to the repository default branch (or otherwise specified)
whenever a branch with some prefix (can be empty, will lead to executuon for all branches) is pushed to.
The idea is that you can set up some workflow that pushes content to branches of the repostory,
and you would then want this push reviewed for merged.

Here is an example of what to put in your workflow file to trigger the action.

```
  steps:
    - uses: ./.github/actions/create-pr
      with:
        github_token: ${{ secrets.GITHUB_TOKEN }}
        draft_pr: "true"
        branch_prefix: ""
        base_branch: ""
        request_title: ""
        request_body: ""
```

Environment variables include:

  - **branch_prefix**: the prefix to filter to. If the branch doesn't start with the prefix, it will be ignored
  - **base_branch**: the branch to issue the pull request to. Defaults to the repositores default branch (optional)
  - **request_body**: the body for the pull request (optional)
  - **request_title**: the title for the pull request  (optional)
  - **draft_pr**: should the pull request be a draft PR? (optional; unset defaults to `false`)
