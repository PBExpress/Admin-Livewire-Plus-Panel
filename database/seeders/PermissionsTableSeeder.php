<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 19,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 20,
                'title' => 'team_create',
            ],
            [
                'id'    => 21,
                'title' => 'team_edit',
            ],
            [
                'id'    => 22,
                'title' => 'team_show',
            ],
            [
                'id'    => 23,
                'title' => 'team_delete',
            ],
            [
                'id'    => 24,
                'title' => 'team_access',
            ],
            [
                'id'    => 25,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 26,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 27,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 28,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 29,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 30,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 31,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 32,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 33,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 34,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 35,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 36,
                'title' => 'product_create',
            ],
            [
                'id'    => 37,
                'title' => 'product_edit',
            ],
            [
                'id'    => 38,
                'title' => 'product_show',
            ],
            [
                'id'    => 39,
                'title' => 'product_delete',
            ],
            [
                'id'    => 40,
                'title' => 'product_access',
            ],
            [
                'id'    => 41,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 42,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 43,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 44,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 45,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 46,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 47,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 48,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 49,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 50,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 51,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 52,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 53,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 54,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 55,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 56,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 57,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 58,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 59,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 60,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 61,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 62,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 63,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 64,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 65,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 66,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 67,
                'title' => 'system_calendar_access',
            ],
            [
                'id'    => 68,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 69,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 70,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 71,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 72,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 73,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 74,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 75,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 76,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 77,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 78,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 79,
                'title' => 'task_create',
            ],
            [
                'id'    => 80,
                'title' => 'task_edit',
            ],
            [
                'id'    => 81,
                'title' => 'task_show',
            ],
            [
                'id'    => 82,
                'title' => 'task_delete',
            ],
            [
                'id'    => 83,
                'title' => 'task_access',
            ],
            [
                'id'    => 84,
                'title' => 'task_calendar_access',
            ],
            [
                'id'    => 85,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 86,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 87,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 88,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 89,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 90,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 91,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 92,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 93,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 94,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 95,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 96,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 97,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 98,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 99,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 100,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 101,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 102,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 103,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 104,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 105,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 106,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 107,
                'title' => 'course_create',
            ],
            [
                'id'    => 108,
                'title' => 'course_edit',
            ],
            [
                'id'    => 109,
                'title' => 'course_show',
            ],
            [
                'id'    => 110,
                'title' => 'course_delete',
            ],
            [
                'id'    => 111,
                'title' => 'course_access',
            ],
            [
                'id'    => 112,
                'title' => 'lesson_create',
            ],
            [
                'id'    => 113,
                'title' => 'lesson_edit',
            ],
            [
                'id'    => 114,
                'title' => 'lesson_show',
            ],
            [
                'id'    => 115,
                'title' => 'lesson_delete',
            ],
            [
                'id'    => 116,
                'title' => 'lesson_access',
            ],
            [
                'id'    => 117,
                'title' => 'test_create',
            ],
            [
                'id'    => 118,
                'title' => 'test_edit',
            ],
            [
                'id'    => 119,
                'title' => 'test_show',
            ],
            [
                'id'    => 120,
                'title' => 'test_delete',
            ],
            [
                'id'    => 121,
                'title' => 'test_access',
            ],
            [
                'id'    => 122,
                'title' => 'question_create',
            ],
            [
                'id'    => 123,
                'title' => 'question_edit',
            ],
            [
                'id'    => 124,
                'title' => 'question_show',
            ],
            [
                'id'    => 125,
                'title' => 'question_delete',
            ],
            [
                'id'    => 126,
                'title' => 'question_access',
            ],
            [
                'id'    => 127,
                'title' => 'question_option_create',
            ],
            [
                'id'    => 128,
                'title' => 'question_option_edit',
            ],
            [
                'id'    => 129,
                'title' => 'question_option_show',
            ],
            [
                'id'    => 130,
                'title' => 'question_option_delete',
            ],
            [
                'id'    => 131,
                'title' => 'question_option_access',
            ],
            [
                'id'    => 132,
                'title' => 'test_result_create',
            ],
            [
                'id'    => 133,
                'title' => 'test_result_edit',
            ],
            [
                'id'    => 134,
                'title' => 'test_result_show',
            ],
            [
                'id'    => 135,
                'title' => 'test_result_delete',
            ],
            [
                'id'    => 136,
                'title' => 'test_result_access',
            ],
            [
                'id'    => 137,
                'title' => 'test_answer_create',
            ],
            [
                'id'    => 138,
                'title' => 'test_answer_edit',
            ],
            [
                'id'    => 139,
                'title' => 'test_answer_show',
            ],
            [
                'id'    => 140,
                'title' => 'test_answer_delete',
            ],
            [
                'id'    => 141,
                'title' => 'test_answer_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
