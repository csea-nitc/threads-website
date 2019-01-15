## This file contains work items that are yet to be implemented.

- There are many CSS related issues. Most pages specify margins, borders and positioning info in pixels. Relative units should be used instead.
- Add template articles showcasing different layouts and formatting options, so that new articles can be easily made from them,
- Currently the passwords are stored in the clear in the database. Ideally they should be salted and hashed.
- Add a site credits page. It can mention the chief developers and designers and contributors.
- In the mobile view, the menu on the left for next articles is not very intuitive. A swipe gesture could be used for next and previous articles
- When articles are opened in edit mode in the admin console, certain special characters appear in some encoded form which is reflected if the article is saved from edit mode. 
- In the admin console, when a asset is uploaded, it redirects to the dashboard home instead of staying on the same page.
- The current implementation exposes all database queries, table names etc. We need a setup in which these are not exposed.
