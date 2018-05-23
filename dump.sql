--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
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
-- Name: tbl_cctv; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tbl_cctv (
    id_cctv integer NOT NULL,
    url_cctv text,
    no_proyek text NOT NULL,
    username text,
    password text,
    status text
);


ALTER TABLE public.tbl_cctv OWNER TO postgres;

--
-- Name: tbl_cctv_id_proyek_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tbl_cctv_id_proyek_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_cctv_id_proyek_seq OWNER TO postgres;

--
-- Name: tbl_cctv_id_proyek_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tbl_cctv_id_proyek_seq OWNED BY tbl_cctv.no_proyek;


--
-- Name: tbl_cctv_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tbl_cctv_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_cctv_id_seq OWNER TO postgres;

--
-- Name: tbl_cctv_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tbl_cctv_id_seq OWNED BY tbl_cctv.id_cctv;


--
-- Name: tbl_jabatan; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tbl_jabatan (
    id_jabatan integer NOT NULL,
    nama_jabatan text,
    kode_jabatan text
);


ALTER TABLE public.tbl_jabatan OWNER TO postgres;

--
-- Name: tbl_jabatan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tbl_jabatan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_jabatan_id_seq OWNER TO postgres;

--
-- Name: tbl_jabatan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tbl_jabatan_id_seq OWNED BY tbl_jabatan.id_jabatan;


--
-- Name: tbl_keperluan; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tbl_keperluan (
    id integer NOT NULL,
    judul text,
    content text
);


ALTER TABLE public.tbl_keperluan OWNER TO postgres;

--
-- Name: tbl_keperluan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tbl_keperluan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_keperluan_id_seq OWNER TO postgres;

--
-- Name: tbl_keperluan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tbl_keperluan_id_seq OWNED BY tbl_keperluan.id;


--
-- Name: tbl_proyek; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tbl_proyek (
    id_proyek integer NOT NULL,
    nama_proyek text,
    lokasi_proyek text,
    divisi_kode text,
    no_proyek text,
    pemilik_proyek text
);


ALTER TABLE public.tbl_proyek OWNER TO postgres;

--
-- Name: tbl_proyek_id_proyek_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tbl_proyek_id_proyek_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_proyek_id_proyek_seq OWNER TO postgres;

--
-- Name: tbl_proyek_id_proyek_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tbl_proyek_id_proyek_seq OWNED BY tbl_proyek.id_proyek;


--
-- Name: tbl_user; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tbl_user (
    id_user integer NOT NULL,
    username text,
    password text,
    first_name text,
    last_name text,
    no_proyek text,
    id_jabatan integer NOT NULL
);


ALTER TABLE public.tbl_user OWNER TO postgres;

--
-- Name: tbl_user_id_jabatan_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tbl_user_id_jabatan_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_user_id_jabatan_seq OWNER TO postgres;

--
-- Name: tbl_user_id_jabatan_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tbl_user_id_jabatan_seq OWNED BY tbl_user.id_jabatan;


--
-- Name: tbl_user_id_user_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tbl_user_id_user_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_user_id_user_seq OWNER TO postgres;

--
-- Name: tbl_user_id_user_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tbl_user_id_user_seq OWNED BY tbl_user.id_user;


--
-- Name: tbl_wd; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tbl_wd (
    id integer NOT NULL,
    nama_divisi text,
    divisi_kode text,
    lokasi text,
    bisnis text
);


ALTER TABLE public.tbl_wd OWNER TO postgres;

--
-- Name: tbl_wd_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tbl_wd_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_wd_id_seq OWNER TO postgres;

--
-- Name: tbl_wd_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tbl_wd_id_seq OWNED BY tbl_wd.id;


--
-- Name: id_cctv; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_cctv ALTER COLUMN id_cctv SET DEFAULT nextval('tbl_cctv_id_seq'::regclass);


--
-- Name: no_proyek; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_cctv ALTER COLUMN no_proyek SET DEFAULT nextval('tbl_cctv_id_proyek_seq'::regclass);


--
-- Name: id_jabatan; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_jabatan ALTER COLUMN id_jabatan SET DEFAULT nextval('tbl_jabatan_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_keperluan ALTER COLUMN id SET DEFAULT nextval('tbl_keperluan_id_seq'::regclass);


--
-- Name: id_proyek; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_proyek ALTER COLUMN id_proyek SET DEFAULT nextval('tbl_proyek_id_proyek_seq'::regclass);


--
-- Name: id_user; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_user ALTER COLUMN id_user SET DEFAULT nextval('tbl_user_id_user_seq'::regclass);


--
-- Name: id_jabatan; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_user ALTER COLUMN id_jabatan SET DEFAULT nextval('tbl_user_id_jabatan_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tbl_wd ALTER COLUMN id SET DEFAULT nextval('tbl_wd_id_seq'::regclass);


--
-- Data for Name: tbl_cctv; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO tbl_cctv VALUES (8, '114.110.17.6:8910', '3017001', 'admin', 'dd31819b903f30779932bb2571c24856', 'Active');
INSERT INTO tbl_cctv VALUES (10, '114.110.17.6:8899', '5017001', 'admin', 'f799626bdf125dbe7a7e7a57f654ca32', 'Active');
INSERT INTO tbl_cctv VALUES (9, '114.110.17.6:8909', '1017001', 'admin', '2bf4e3a64e983f9ed3ddeedc947cec1d', 'Active');
INSERT INTO tbl_cctv VALUES (11, '114.110.17.6:8898', '2017001', 'admin', '2bf4e3a64e983f9ed3ddeedc947cec1d', 'Active');
INSERT INTO tbl_cctv VALUES (12, '114.110.17.6:8893', '4017001', 'admin', '2bf4e3a64e983f9ed3ddeedc947cec1d', 'Active');
INSERT INTO tbl_cctv VALUES (13, '114.110.17.6:8895', '6017001', 'admin', '2bf4e3a64e983f9ed3ddeedc947cec1d', 'Active');
INSERT INTO tbl_cctv VALUES (14, '114.110.17.6:8897', '8117001', 'admin', '2bf4e3a64e983f9ed3ddeedc947cec1d', 'Active');
INSERT INTO tbl_cctv VALUES (15, '195.196.36.242/view/index.shtml', '8217001', 'admin', '950bb7627875ae06787b3e8120a81dec', 'Active');


--
-- Name: tbl_cctv_id_proyek_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tbl_cctv_id_proyek_seq', 1, false);


--
-- Name: tbl_cctv_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tbl_cctv_id_seq', 16, true);


--
-- Data for Name: tbl_jabatan; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO tbl_jabatan VALUES (1, 'Project Manager', '001');
INSERT INTO tbl_jabatan VALUES (2, 'Superintendent', '002');
INSERT INTO tbl_jabatan VALUES (3, 'Supervisor', '003');
INSERT INTO tbl_jabatan VALUES (4, 'Welder', '004');
INSERT INTO tbl_jabatan VALUES (5, 'Pipe Fitter', '005');
INSERT INTO tbl_jabatan VALUES (6, 'Helper', '006');
INSERT INTO tbl_jabatan VALUES (7, 'Logistic', '007');
INSERT INTO tbl_jabatan VALUES (8, 'Project Control', '008');
INSERT INTO tbl_jabatan VALUES (9, 'Quality Control', '009');
INSERT INTO tbl_jabatan VALUES (10, 'Document Control', '010');
INSERT INTO tbl_jabatan VALUES (11, 'HRD Admin', '011');
INSERT INTO tbl_jabatan VALUES (12, 'HSE Coordinator', '012');
INSERT INTO tbl_jabatan VALUES (13, 'HSE Officer', '013');
INSERT INTO tbl_jabatan VALUES (14, 'Safety Man', '014');


--
-- Name: tbl_jabatan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tbl_jabatan_id_seq', 19, true);


--
-- Data for Name: tbl_keperluan; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO tbl_keperluan VALUES (3, 'Rompi 1 HK', 'Rompi HK 01.jpg');
INSERT INTO tbl_keperluan VALUES (6, 'Rompi 2 HK', 'Rompi HK.jpg');
INSERT INTO tbl_keperluan VALUES (7, 'Helm Proyek HK', 'Helm Proyek.jpg');
INSERT INTO tbl_keperluan VALUES (8, 'Standarisasi Pagar HK type 1', 'Standarisasi Pagar 1-Model.jpg');
INSERT INTO tbl_keperluan VALUES (9, 'Standarisasi Pagar HK type 2', 'Standarisasi Pagar 1-Model2.jpg');
INSERT INTO tbl_keperluan VALUES (16, 'Logo HK', 'hk.png');
INSERT INTO tbl_keperluan VALUES (17, 'Struktur HK', 'Struktur HK.jpg');


--
-- Name: tbl_keperluan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tbl_keperluan_id_seq', 18, true);


--
-- Data for Name: tbl_proyek; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO tbl_proyek VALUES (8, 'RSUD Ulin', 'Balikpapan', '030', '3017001', 'Kementrian PUPR');
INSERT INTO tbl_proyek VALUES (10, 'Ibis Hotel Makassar', 'Maros', '050', '5017001', 'Ibis Hotel');
INSERT INTO tbl_proyek VALUES (9, 'Gd Pasar Padang Panjang', 'Medan', '010', '1017001', 'Kementrian PUPR');
INSERT INTO tbl_proyek VALUES (11, 'Waduk Lewikeris', 'Sukabumi', '020', '2017001', 'Kementrian PUPR');
INSERT INTO tbl_proyek VALUES (12, 'Jalan Oecussie', 'Timor Leste', '040', '4017001', 'Pemerintahan Oecussie');
INSERT INTO tbl_proyek VALUES (13, 'Apartement Pluit Sea View', 'Jakarta Utara', '060', '6017001', 'Pluit Group');
INSERT INTO tbl_proyek VALUES (14, 'PLTU Jati Roto', 'Jati Roto', '081', '8117001', 'PT.Indonesia Power');
INSERT INTO tbl_proyek VALUES (15, 'JORRS Jakarta', 'Jakarta', '082', '8217001', 'PT.Hutama Karya');


--
-- Name: tbl_proyek_id_proyek_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tbl_proyek_id_proyek_seq', 32, true);


--
-- Data for Name: tbl_user; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO tbl_user VALUES (16, 'ewang', '21232f297a57a5a743894a0e4a801fc3', 'ewangga', 'arga wikersa', '5017001', 10);
INSERT INTO tbl_user VALUES (8, 'administrator', '0192023a7bbd73250516f069df18b500', '', '', '', 1);
INSERT INTO tbl_user VALUES (15, 'wahayahu', 'e10adc3949ba59abbe56e057f20f883e', 'Wahyu', 'Argika M', '6017001', 2);
INSERT INTO tbl_user VALUES (14, 'ardabilly', '21232f297a57a5a743894a0e4a801fc3', 'arda', 'billy', '8217001', 3);


--
-- Name: tbl_user_id_jabatan_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tbl_user_id_jabatan_seq', 2, true);


--
-- Name: tbl_user_id_user_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tbl_user_id_user_seq', 16, true);


--
-- Data for Name: tbl_wd; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO tbl_wd VALUES (1, 'Wilayah 1', '010', 'Medan', 'Konstruksi, jalan jembatan dan bendungan');
INSERT INTO tbl_wd VALUES (2, 'Wilayah 2', '020', 'Jakarta', 'Konstruksi, jalan jembatan dan bendungan');
INSERT INTO tbl_wd VALUES (3, 'Wilayah 3', '030', 'Balikpapan', 'Konstruksi, jalan jembatan dan bendungan');
INSERT INTO tbl_wd VALUES (4, 'Wilayah 4', '040', 'Surabaya', 'Konstruksi, jalan jembatan dan bendungan');
INSERT INTO tbl_wd VALUES (5, 'Wilayah 5', '050', 'Makassar', 'Konstruksi, jalan jembatan dan bendungan');
INSERT INTO tbl_wd VALUES (6, 'Divisi Gedung', '060', 'Jakarta', 'Gedung dan Apartement');
INSERT INTO tbl_wd VALUES (7, 'Divisi EPC', '081', 'Jakarta', 'Engineering procurement and construction');
INSERT INTO tbl_wd VALUES (8, 'Divisi jalan tol', '082', 'Jakarta', 'Jalan tol');


--
-- Name: tbl_wd_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tbl_wd_id_seq', 9, true);


--
-- Name: tbl_cctv_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tbl_cctv
    ADD CONSTRAINT tbl_cctv_pkey PRIMARY KEY (id_cctv);


--
-- Name: tbl_jabatan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tbl_jabatan
    ADD CONSTRAINT tbl_jabatan_pkey PRIMARY KEY (id_jabatan);


--
-- Name: tbl_keperluan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tbl_keperluan
    ADD CONSTRAINT tbl_keperluan_pkey PRIMARY KEY (id);


--
-- Name: tbl_proyek_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tbl_proyek
    ADD CONSTRAINT tbl_proyek_pkey PRIMARY KEY (id_proyek);


--
-- Name: tbl_user_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tbl_user
    ADD CONSTRAINT tbl_user_pkey PRIMARY KEY (id_user);


--
-- Name: tbl_wd_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tbl_wd
    ADD CONSTRAINT tbl_wd_pkey PRIMARY KEY (id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

