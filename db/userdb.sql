CREATE TABLE PROPERTY_INFO(
   ID                     SERIAL    PRIMARY KEY,
   OWNER_ID               INT       NOT NULL,
   CITY_ID                INT       NOT NULL,
   SCORE                  INT       NOT NULL 
);
CREATE TABLE UNITS(
   ID                     SERIAL    PRIMARY KEY,
   LIGHT_UNIT             INT       NOT NULL,
   HEAVY_UNIT             INT       NOT NULL,
   FAST_UNIT              INT       NOT NULL,
   RANGED_UNIT            INT       NOT NULL,
   ARTILLERY_UNIT         INT       NOT NULL,
   FLYING_UNIT            INT       NOT NULL,
   SPECIALA_UNIT          INT       NOT NULL,
   SPECIALB_UNIT          INT       NOT NULL,
   SPECIALC_UNIT          INT       NOT NULL   
);
CREATE TABLE BUILDINGS_LVL(
   ID                     SERIAL    PRIMARY KEY,
   CONTROLHQ              INT       NOT NULL,
   ORGANICAL_EXTRACTOR    INT       NOT NULL,
   MINERAL_EXTRACTOR      INT       NOT NULL,
   WAREHOUSE              INT       NOT NULL,
   HUNTER_CABINE          INT       NOT NULL,
   BARRACKS               INT       NOT NULL,
   DEFENSES               INT       NOT NULL,
   WORKSHOP               INT       NOT NULL,
   NURSERY                INT       NOT NULL,
   LABORATORY             INT       NOT NULL
);
CREATE TABLE UPGRADE_DEV(
   ID                      SERIAL    PRIMARY KEY,
   METALURGY               INT       NOT NULL,
   ARMOUR                  INT       NOT NULL,
   ASTROLOGY               INT       NOT NULL,
   ENERGY                  INT       NOT NULL,
   COMPUTER                INT       NOT NULL,
   COMBUSTION              INT       NOT NULL,
   ROBOTICS                INT       NOT NULL,
   RENEWABLE_ENERGY        INT       NOT NULL,
   LASER                   INT       NOT NULL,
   IONS                    INT       NOT NULL,
   PLASMA                  INT       NOT NULL,
   HYPERSPACE              INT       NOT NULL
);
