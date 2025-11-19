<?php

namespace App\Enums;

enum PermissionEnum :string
{

    /*
    |--------------------------------------------------------------------------
    | User Management
    |--------------------------------------------------------------------------
    */
    case USER_VIEW = 'user_view';
    case USER_CREATE = 'user_create';
    case USER_UPDATE = 'user_update';
    case USER_DELETE = 'user_delete';
    case USER_MANAGE_ROLES = 'user_manage_roles';

    /*
    |--------------------------------------------------------------------------
    | Categories
    |--------------------------------------------------------------------------
    */
    case CATEGORY_VIEW = 'category_view';
    case CATEGORY_CREATE = 'category_create';
    case CATEGORY_UPDATE = 'category_update';
    case CATEGORY_DELETE = 'category_delete';

    /*
    |--------------------------------------------------------------------------
    | Courses
    |--------------------------------------------------------------------------
    */
    case COURSE_VIEW = 'course_view';
    case COURSE_CREATE = 'course_create';
    case COURSE_UPDATE = 'course_update';
    case COURSE_DELETE = 'course_delete';
    case COURSE_PUBLISH = 'course_publish';

    /*
    |--------------------------------------------------------------------------
    | Lessons
    |--------------------------------------------------------------------------
    */
    case LESSON_VIEW = 'lesson_view';
    case LESSON_CREATE = 'lesson_create';
    case LESSON_UPDATE = 'lesson_update';
    case LESSON_DELETE = 'lesson_delete';

    /*
    |--------------------------------------------------------------------------
    | Assignments
    |--------------------------------------------------------------------------
    */
    case ASSIGNMENT_VIEW = 'assignment_view';
    case ASSIGNMENT_CREATE = 'assignment_create';
    case ASSIGNMENT_UPDATE = 'assignment_update';
    case ASSIGNMENT_DELETE = 'assignment_delete';
    case ASSIGNMENT_GRADE = 'assignment_grade'; // teacher grades

    /*
    |--------------------------------------------------------------------------
    | Grades
    |--------------------------------------------------------------------------
    */
    case GRADE_VIEW = 'grade_view';
    case GRADE_UPDATE = 'grade_update'; // teacher only

    /*
    |--------------------------------------------------------------------------
    | Enrollment (Course Student)
    |--------------------------------------------------------------------------
    */
    case ENROLLMENT_VIEW = 'enrollment_view';
    case ENROLLMENT_CREATE = 'enrollment_create';
    case ENROLLMENT_DELETE = 'enrollment_delete';

    /*
    |--------------------------------------------------------------------------
    | Tags
    |--------------------------------------------------------------------------
    */
    case TAG_VIEW = 'tag_view';
    case TAG_CREATE = 'tag_create';
    case TAG_UPDATE = 'tag_update';
    case TAG_DELETE = 'tag_delete';

    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    */
    case NOTIFICATION_VIEW = 'notification_view';
    case NOTIFICATION_SEND = 'notification_send';

    /*
    |--------------------------------------------------------------------------
    | Roles & Permissions
    |--------------------------------------------------------------------------
    */
    case ROLE_VIEW = 'role_view';
    case ROLE_CREATE = 'role_create';
    case ROLE_UPDATE = 'role_update';
    case ROLE_DELETE = 'role_delete';
    case PERMISSION_MANAGE = 'permission_manage';

}
