CREATE TABLE GALAXY(
     ID               SERIAL    PRIMARY KEY,
     NAME             TEXT      NOT NULL
);

CREATE TABLE SOLAR_SYSTEM(
   ID               SERIAL    PRIMARY KEY,
   NAME             TEXT      NOT NULL,
   XAXIS            INT       NOT NULL,
   YAXIS            INT       NOT NULL,
   N_PLANETS        INT       NOT NULL,
   GALAXY_ID        INT       REFERENCES GALAXY(ID)
);
CREATE TABLE PLANETS(
   ID               SERIAL    PRIMARY KEY,
   NAME             TEXT      NOT NULL,
   XAXIS            INT       NOT NULL,
   YAXIS            INT       NOT NULL,
   SOLAR_SYSTEM_ID  INT       REFERENCES SOLAR_SYSTEM(ID)
);

CREATE TABLE LAND_MASS(
   ID               SERIAL    PRIMARY KEY,
   NAME             TEXT      NOT NULL,
   XAXIS            INT       NOT NULL,
   YAXIS            INT       NOT NULL,
   LAND_TYPE        INT       NOT NULL,
   PLANET_ID        INT       REFERENCES PLANETS(ID)
);
CREATE TABLE CITIES(
   ID               SERIAL    PRIMARY KEY,
   NAME             TEXT      NOT NULL,
   XAXIS            INT       NOT NULL,
   YAXIS            INT       NOT NULL,
   LAND_MASS_ID     INT       REFERENCES LAND_MASS(ID)
);

