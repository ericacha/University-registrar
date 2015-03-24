--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: student_info; Type: TABLE; Schema: public; Owner: Guest; Tablespace: 
--

CREATE TABLE student_info (
    id integer NOT NULL,
    name character varying,
    enrollment_date timestamp without time zone
);


ALTER TABLE student_info OWNER TO "Guest";

--
-- Name: student_info_id_seq; Type: SEQUENCE; Schema: public; Owner: Guest
--

CREATE SEQUENCE student_info_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE student_info_id_seq OWNER TO "Guest";

--
-- Name: student_info_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: Guest
--

ALTER SEQUENCE student_info_id_seq OWNED BY student_info.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: Guest
--

ALTER TABLE ONLY student_info ALTER COLUMN id SET DEFAULT nextval('student_info_id_seq'::regclass);


--
-- Data for Name: student_info; Type: TABLE DATA; Schema: public; Owner: Guest
--

COPY student_info (id, name, enrollment_date) FROM stdin;
\.


--
-- Name: student_info_id_seq; Type: SEQUENCE SET; Schema: public; Owner: Guest
--

SELECT pg_catalog.setval('student_info_id_seq', 1, false);


--
-- Name: student_info_pkey; Type: CONSTRAINT; Schema: public; Owner: Guest; Tablespace: 
--

ALTER TABLE ONLY student_info
    ADD CONSTRAINT student_info_pkey PRIMARY KEY (id);


--
-- Name: public; Type: ACL; Schema: -; Owner: epicodus
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM epicodus;
GRANT ALL ON SCHEMA public TO epicodus;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

