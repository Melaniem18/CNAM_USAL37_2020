use tp_freelancer;

insert into customers_cats
(cat_name)
values
(1, 'Particulier'),
(2, 'Secteur public'),
(3, 'Entreprise privée');

insert into customers
(customer_name, customer_email, cat_id)
values
('Mike', 'm@test.fr', 1),
('Jon', 'j@test.fr', 1),
('FISC', 'fisc@test.fr', 2),
('Plombier Machin', 'plmobier@test.fr', 3);

insert into jobs
(job_state, job_title, customer_id)
values
('En cours', 'Site wordpress pour Mike', 1),
('Terminé', 'Site prestashop', 1),
('En cours', 'Site Drupal pour Jon', 2);