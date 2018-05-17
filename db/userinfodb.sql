
CREATE TABLE user_crypt(
   id                                        SERIAL         PRIMARY KEY,
   user_account_id                           INT            REFERENCES GALAXY(ID),
   password_salt                             TEXT(100)      NOT NULL,
   password_pepper                           TEXT(100)      NOT NULL,
   password_hash                             TEXT(100)      NOT NULL
);

CREATE TABLE user_details(
   id                                        SERIAL    PRIMARY KEY,
   username                                  TEXT(255)      NOT NULL,
   email                                     TEXT(100)      NOT NULL,
   password                                  TEXT(255)      NOT NULL

);
////////////Controller Connection//////////
CREATE TABLE user_account(
   id                                        SERIAL         PRIMARY KEY,
   screen_user_name                          TEXT(255)      NOT NULL,
   user_account_id                           INT            REFERENCES GALAXY(ID),
);
////////////Controller Connection//////////
CREATE TABLE user_external_login(
   id                                        SERIAL    PRIMARY KEY,
   user_account_id                           INT       REFERENCES GALAXY(ID),
   external_autentication_provider_id        INT       REFERENCES GALAXY(ID),
   name                                      TEXT(30)  NOT NULL,
   first_name                                TEXT(30)  NOT NULL,
   last_name                                 TEXT(30)  NOT NULL,
   email                                     TEXT(30)  NOT NULL,
   login_name                                TEXT(30)  NOT NULL
);

CREATE TABLE async_operation(
   id                                        SERIAL    PRIMARY KEY,
   external_autentication_provider_id        INT       REFERENCES GALAXY(ID),
   async_operation_status_type_id            INT       REFERENCES GALAXY(ID),
   user_external_login_id                    INT       REFERENCES GALAXY(ID)
);


CREATE TABLE external_autentication_provider(
   id                                        SERIAL    PRIMARY KEY,
   name                                      TEXT(20)  NOT NULL
);


CREATE TABLE async_operation_status_type(
   id                                        SERIAL    PRIMARY KEY,
   name                                      TEXT(20)  NOT NULL
);
