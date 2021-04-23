<?php

class CONF {

    /* Flag for demo version */
    public $DEMO_VERSION = false;

    /* Data configuration for database */
    public $DB_SERVER   = "localhost";
    public $DB_USER     = "nusrhjdq_markeet";
    public $DB_PASSWORD = "Markeet123";
    public $DB_NAME     = "nusrhjdq_markeet";

    /* FCM key for notification */
    public $FCM_KEY     = "AIzaSyD4hqigQCpx1aw-X4xFjbDcie8QxXpgyTI";


    /* [ IMPORTANT ] be careful when edit this security code, use AlphaNumeric only*/
    /* This string must be same with security code at Android, if its different android unable to submit order */
    public $SECURITY_CODE = "rvfD9eAIqbjX71EXMKNTVSwSoPIWfOiFalN4Oyo37o3nboSViCUNPDruie662SU5I8III3j9MF3gDCW6nlWZlhmTaiupven3UxR6";

    /* Mailer config ---------------------------------------------------- */

    // change with yours
    public $SMTP_EMAIL      = "sample@your-domain.com";
    public $SMTP_PASSWORD   = "password";
    public $SMTP_HOST       = "mail.your-domain.com";
    public $SMTP_PORT       = 562;

    // for administrator & for buyer
    public $SUBJECT_EMAIL_NEW_ORDER = "Market New Order";
    public $TITLE_REPORT_NEW_ORDER  = "Market New Order";

    // for buyer
    public $SUBJECT_EMAIL_ORDER_PROCESSED   = "Order PROCESSED";
    public $TITLE_REPORT_ORDER_PROCESSED    = "Order Status Change to PROCESSED";

    public $SUBJECT_EMAIL_ORDER_UPDATED     = "Order Data Updated";
    public $TITLE_REPORT_ORDER_UPDATED      = "Order Data Updated By Admin";
}

?>