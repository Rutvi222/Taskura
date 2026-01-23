# 1. The Core Architecture Concept: "The Pyramid of Authority"
The system operates on a four-tier hierarchy:
- **Users**: The base identity.
- **Teams**: The highest organizational unit (Logic: One team can have many projects).
- **Projects**: The logical container for tasks (Logic: One project can have many tasks).
- **Tasks/Subtasks**: The atomic unit of work.

# 2. User Registration & Authentication
## Flow:
### User Registration:
- Users enter email, password, and optional profile info.
- Email Verification: Send an email with a verification link.
- `is_email_verified` is set to 0 initially.
- Password Hashing: Use a secure hashing algorithm (like bcrypt) to store passwords securely.

### Login:
- Users enter email/password.
- System checks if the email is verified (`is_email_verified = 1`).
- Authenticate the password.
- On successful login:
  - Generate a device token (using UUID or SHA256) for the device.
  - Capture device info (browser, OS, IP).
  - Save the device token in the user_devices table.
  - If it's a new device, trigger an email/OTP verification.

### Device Security:
- If the device token already exists, mark it as a trusted device (`is_trusted = TRUE`).
- If the device is new or the IP address differs significantly, prompt for OTP or email verification.

### Logout:
- Invalidates the session and device token (if needed).

# 3. Team Management
## Flow:
### Create a Team:
- A user (team admin) creates a team, which is stored in the teams table.
- Permissions: Admin has full control. Other users can join or be invited.

### Invite Members to Team:
- An admin invites a user via email.
- The invited user receives a link to join the team.
- Once they join, the team_members table is updated with their role (Admin/Member).

### Team Settings & Management:
- Admin can modify the team settings like name, description, logo, and delete the team (soft delete).

# 4. Project Management
## Flow:
### Create a Project:
- A team admin or project manager creates a new project, which is stored in the projects table.
- Add sections (like phases or sprints) and assign roles for the project.
- Define the visibility (public/private) and set project deadlines.

### Assign Users to Project:
- Project admins can assign users with roles (Owner, Contributor, Viewer).
- This is managed in the project_members table.

### Manage Project Settings:
- Admins can modify project details, add new sections, and manage members.

# 5. Task Management
## Flow:
### Create a Task:
- Users create tasks under a specific project section.
- Tasks are assigned an owner and one or more assigned members.
- The tasks table stores the task title, description, due date, priority, and status.

### Assign Subtasks:
- Tasks can be broken down into smaller subtasks.
- Each subtask can have its own due date, assignee, and status.

### Set Task Dependencies:
- Tasks can be dependent on other tasks, and this relationship is managed in the tasks table using `depends_on_task_id`.

### Task Updates:
- Users can comment on tasks, upload files, and change the status (e.g. "Completed").
- Task comments are stored in task_comments.
- Files attached to tasks are stored in task_files.

### Task Progress Tracking:
- Users can mark tasks as complete.
- Task status and completion information are updated in the tasks table.

# 6. Notifications System
## Flow:
### Generate Notifications:
- Notifications are generated for task assignments, status updates, new comments, and reminders.
- This data is stored in the notifications table.
- Notifications are sent via email.

### Notification Handling:
- When a user views the notifications, the `is_read` flag is set to 1.
- Admins or users can opt-out or mute specific notifications.

# 7. Permissions & Access Control
## Flow:
### Role-Based Permissions:
- Users are assigned different roles at the team level (Admin/Member).
- Users can also have roles at the project and task level (Owner, Contributor, Viewer).

### Permissions control who can:
- Edit tasks, projects, or teams.
- Assign tasks or users.
- Invite new members to projects or teams.
- View or comment on tasks and projects.

### Access Control:
- Admins can define public or private visibility for tasks and projects.
- Only invited members can access private projects or tasks.
- Guest users might have read-only access to specific tasks/projects.

# 8. Reporting and Analytics
## Flow:
### Team Activity Reports:
- Track team activity such as tasks completed, tasks assigned, etc.
- This data can be fetched from the tasks and task_comments tables, then aggregated.

### Export Data:
- Data such as tasks, projects, and team info can be exported to CSV or Excel for external reporting.
- Export activity is logged in the exported_data table.

# 9. Security Features
## Flow:
### Device Tracking:
- When a user logs in, the system checks for a device token in the user_devices table.
- If the device token is new or the IP is different, a verification (email/OTP) is required.
- The system stores device information to prevent fraudulent logins.

### Audit Logs:
- All critical user actions (task assignments, project deletions, etc.) are logged in the audit_logs table.
- Admins can review logs for auditing purposes and detecting suspicious behavior.

# 10. User Interface & UX Flow
### Dashboard:
- After logging in, users see a project dashboard where they can view and manage tasks, teams, and projects.
- The task list can be viewed in different views: list view, board view (Kanban).

### Task View:
- Clicking on a task opens the task details page, where users can comment, upload files, and change task status.
- Subtasks, dependencies are visible as part of the task details.

### Team Management UI:
- Admins have a special section to manage teams, members, and permissions.
- Invite buttons for new users and options to manage roles (Admin, Member).

### Project Management UI:
- Users can manage sections (sprints/phases) and assign roles for projects.

### Notification Center:
- Users can view task updates, reminders, and comments in the notification area.
- Notifications can be marked as read or cleared.

# 11. Scalability Considerations
### Database Optimization:
- Use indexes on frequently queried columns like `user_id`, `task_id`, `project_id`.
- Implement pagination for tasks, projects, and comments to avoid loading too much data at once.

