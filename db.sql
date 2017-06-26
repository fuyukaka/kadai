-- Table: my_items

-- DROP TABLE my_items;

CREATE TABLE my_items
(
  id integer NOT NULL DEFAULT nextval('item_id_seq'::regclass),
  item_name text,
  price integer,
  keyword text,
  CONSTRAINT my_items_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE my_items
  OWNER TO postgres;