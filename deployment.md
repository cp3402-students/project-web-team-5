# Deployment Workflow

This document outlines the development and deployment workflow for our project, which aims to facilitate theme updates locally, testing, and deployment to staging and live sites. This workflow is intended to provide enough information that anyone can follow successfully.

## Table of Contents
1. [Project Management](#project-management)
2. [Version Control](#version-control)
3. [Workflow](#Workflow)
4. [Plugins for Deployment](#plugins-for-deployment)
5. [Local Development](#local-development)
6. [Testing and Automation](#testing-and-automation)

## Project Management

Our project is managed using [GitHub](https://github.com/), which serves as the primary code repository and issue tracker. All development activities, including feature requests, bug reports, and code reviews, are managed through the group repository. GitHub's pull request feature provides a way to propose and review changes to a project's codebase. Team members can create a pull request to suggest changes, and other team members can review and comment on the changes before they are merged into the codebase.

We use [Trello](https://trello.com/b/jayTPJxC/group-5-cp3402) for project management, where we track tasks, deadlines, and dependencies. Each task is assigned to a specific team member, who is responsible for completing it within the deadline.

## Version Control

We use [Git](https://git-scm.com/) as our version control system to track changes in our project's codebase. Our GitHub repository serves as the central repository, where all changes are pushed, and from where all deployments originate.

When creating a WordPress website with an Understrap starter theme, our team used Git for version control to manage our codebase efficiently. Here are the steps we followed:

1. We created a new Git repository on a hosting platform such as GitHub or Bitbucket. 
2. We cloned the repository to our local machines using Git.
3. We initialized the Understrap starter theme as a Git subdirectory inside the repository by running `git submodule add` followed by the URL of the starter theme repository.
4. We started making changes to the theme by creating a new branch in Git for each feature or bug fix. We created a branch for each task, so that changes could be easily tracked and rolled back if needed.
5. Once the changes were complete, we committed them to the branch and pushed the changes to the remote repository, making the changes available to other team members.
6. Other team members reviewed the changes and provided feedback or suggested changes by checking out the branch and making comments or edits.
7. Once the changes were reviewed and approved, we merged the branch back into the main branch.
8. We deployed changes to staging or production environments using Git by creating a release branch and merging it into the main branch once it was tested and verified.

By using Git for version control, we were able to collaborate more effectively, track changes, and maintain a stable, production-ready codebase. This was especially important when working on a complex project such as a WordPress website with a starter theme, where changes could affect many parts of the codebase.

## Workflow

Our Git workflow follows the [Gitflow](https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow) methodology that our team aimed to follow during the production of the website. Gitflow is a popular Git branching model that defines a set of guidelines for organizing and managing Git branches in a project. It provides a clear, well-defined branching strategy that is easy to understand and follow, making it a popular choice for teams of all sizes.

The Gitflow methodology is based on two main branches:
1. **Main Branch**: The main branch contains the production-ready code. This branch should only contain stable, fully tested code that is ready to be deployed to the live site.
2. **Test Branch**: The test branch contains the latest code that is being actively developed. This branch should always be in a state of readiness, meaning that it should always contain fully tested code that is ready to be deployed to the staging environment.

In addition to these main branches, Gitflow defines several other types of branches that are used for specific purposes, such as:
1. **Feature Branches**: Feature branches are created when a new feature is being developed. These branches are created off of the test branch and merged back into it when the feature is complete.
2. **Release Branches**: Release branches are created when a new release is being prepared. These branches are created off of the test branch and merged into both the main and test branches when the release is ready.
3. **Hotfix Branches**: Hotfix branches are created when a critical bug needs to be fixed in the production code. These branches are created off of the main branch and merged back into both the main and develop branches when the fix is complete.

In our project, we used the Gitflow methodology by adopting a similar branching strategy and following its guidelines for creating and managing branches. This involved creating a main branch and a test branch, and using feature branches for developing new features and bug fixes. We also used release branches to prepare releases for deployment to staging and production environments, and hotfix branches to quickly address critical issues in the production code.

Using Gitflow helped us manage our codebase more efficiently, reducing the risk of conflicts and making it easier to maintain a stable, production-ready codebase. 
When we were ready to deploy changes to staging or production, we created a release branch, which was then deployed to the respective environment. Once the changes were tested and verified, we merged the release branch back into the main branch.

## Plugins for Deployment
Our team used the WP Pusher way for the deployment process of our WordPress site. This involved using a test branch for the staging site and the main branch for the live site. Additionally, each team member had their own individual branch to test changes locally before creating a pull request to the test branch.

Using WP Pusher, we were able to manage the deployment process of our WordPress site with ease. We first set up our repository to include a test branch and a main branch. The test branch was used for staging changes before deploying to the live site on the main branch. 

Each team member was then able to work on their own individual branch to test changes locally. When they were ready to merge their changes into the test branch, they created a pull request. WP Pusher allowed us to review and test the changes in the test environment before deploying to the live site.

Once changes were approved and merged into the test branch, WP Pusher automatically deployed the changes to the staging site for further testing. If everything looked good, we were then able to use WP Pusher to easily deploy the changes to the live site.

Using WP Pusher in our deployment process allowed us to streamline the workflow and ensure that changes were thoroughly tested before deploying to the live site. It also made it easy for each team member to work on their own changes and collaborate on the project. We found that this was an effective solution for managing the deployment process of our WordPress site.


## Local Development

To work on theme updates locally, team members must follow these steps:

1. Clone the repository to their local machine using Git.
2. Create a new branch to work on the changes.
3. Make the necessary changes and commit them to their branch.
4. Push the branch to the GitHub repository.
5. Create a pull request (PR) to merge the changes into the develop branch.
6. Once the PR has been approved and merged into the develop branch, the changes will be automatically deployed to the staging environment.

## Testing and Automation
The team used Docker to host a WordPress site locally, which provided a consistent development environment for all team members. We utilized a GitHub repo to store and version control the starter theme code, allowing for changes to be made and tested locally before pushing to individual test branches.

Once changes were pushed to the individual test branches, the team created pull requests to merge these changes into the test branch. The WP Pusher plugin was used to update the staging site with these changes. Before merging the test branch to the main branch, further testing was done on the staging site to ensure that everything was working as expected. Once the testing was complete, the team created another pull request to merge the changes from the test branch to the main branch.

Finally, the team used the WP Pusher plugin to update the main site with the changes from the main branch. This automated workflow ensured that changes were thoroughly tested before being deployed to the live site, which helped to minimize the risk of introducing bugs or other issues. By using tools like Docker, GitHub, and WP Pusher, the team was able to work efficiently and collaboratively while maintaining a high level of quality and consistency.



This deployment workflow provides a clear and concise set of guidelines for theme updates and deployment to staging and live sites. With this workflow, anyone can successfully work on theme updates locally, test them, and deploy them to production.
