<?php

namespace App\Enums;

enum RolePermissionEnum :string
{
    case ADMIN = 'admin';
    case TEACHER = 'teacher';
    case STUDENT = 'student';
    public function permissions(): array
    {
       return match ($this) {

            // ---------------------------------------------------------
            // ADMIN PERMISSIONS
            // ---------------------------------------------------------
            self::ADMIN => [
                // Users
                PermissionEnum::USER_VIEW->value,
                PermissionEnum::USER_CREATE->value,
                PermissionEnum::USER_UPDATE->value,
                PermissionEnum::USER_DELETE->value,
                PermissionEnum::USER_MANAGE_ROLES->value,

                // Categories
                PermissionEnum::CATEGORY_VIEW->value,
                PermissionEnum::CATEGORY_CREATE->value,
                PermissionEnum::CATEGORY_UPDATE->value,
                PermissionEnum::CATEGORY_DELETE->value,

                // Courses
                PermissionEnum::COURSE_VIEW->value,
                PermissionEnum::COURSE_CREATE->value,
                PermissionEnum::COURSE_UPDATE->value,
                PermissionEnum::COURSE_DELETE->value,
                PermissionEnum::COURSE_PUBLISH->value,

                // Lessons
                PermissionEnum::LESSON_VIEW->value,
                PermissionEnum::LESSON_CREATE->value,
                PermissionEnum::LESSON_UPDATE->value,
                PermissionEnum::LESSON_DELETE->value,

                // Assignments
                PermissionEnum::ASSIGNMENT_VIEW->value,
                PermissionEnum::ASSIGNMENT_CREATE->value,
                PermissionEnum::ASSIGNMENT_UPDATE->value,
                PermissionEnum::ASSIGNMENT_DELETE->value,

                // Grades
                PermissionEnum::GRADE_VIEW->value,
                PermissionEnum::GRADE_UPDATE->value,

                // Enrollment
                PermissionEnum::ENROLLMENT_VIEW->value,
                PermissionEnum::ENROLLMENT_CREATE->value,
                PermissionEnum::ENROLLMENT_DELETE->value,

                // Tags
                PermissionEnum::TAG_VIEW->value,
                PermissionEnum::TAG_CREATE->value,
                PermissionEnum::TAG_UPDATE->value,
                PermissionEnum::TAG_DELETE->value,

                // Notifications
                PermissionEnum::NOTIFICATION_VIEW->value,
                PermissionEnum::NOTIFICATION_SEND->value,

                // Roles & Permissions
                PermissionEnum::ROLE_VIEW->value,
                PermissionEnum::ROLE_CREATE->value,
                PermissionEnum::ROLE_UPDATE->value,
                PermissionEnum::ROLE_DELETE->value,
                PermissionEnum::PERMISSION_MANAGE->value,
            ],

            // ---------------------------------------------------------
            // TEACHER PERMISSIONS
            // ---------------------------------------------------------
            self::TEACHER => [
                // Courses
                PermissionEnum::COURSE_VIEW->value,
                PermissionEnum::COURSE_CREATE->value,
                PermissionEnum::COURSE_UPDATE->value,

                // Lessons
                PermissionEnum::LESSON_VIEW->value,
                PermissionEnum::LESSON_CREATE->value,
                PermissionEnum::LESSON_UPDATE->value,

                // Assignments
                PermissionEnum::ASSIGNMENT_VIEW->value,
                PermissionEnum::ASSIGNMENT_CREATE->value,
                PermissionEnum::ASSIGNMENT_UPDATE->value,
                PermissionEnum::ASSIGNMENT_GRADE->value,

                // Grades
                PermissionEnum::GRADE_VIEW->value,
                PermissionEnum::GRADE_UPDATE->value,
            ],

            // ---------------------------------------------------------
            // STUDENT PERMISSIONS
            // ---------------------------------------------------------
            self::STUDENT => [
                PermissionEnum::COURSE_VIEW->value,
                PermissionEnum::LESSON_VIEW->value,
                PermissionEnum::ASSIGNMENT_VIEW->value,
                PermissionEnum::GRADE_VIEW->value,
            ],
        };
    }
}
