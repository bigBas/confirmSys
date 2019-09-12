
VIEW `vw_alumnos_inscritos` AS
    SELECT 
        `a`.`nombre` AS `nombre`,
        `a`.`id_cuenta` AS `id_cuenta`,
        `b`.`id_periodo` AS `id_periodo`,
        `c`.`id_carrera` AS `id_carrera`,
        `b`.`id_plataforma` AS `id_plataforma`,
        `d`.`semestre` AS `semestre`
    FROM
        (((`alumno_inscrito` `b`
        JOIN `alumno` `a` ON (`a`.`id_cuenta` = `b`.`id_cuenta`))
        JOIN `carrera` `c` ON (`c`.`id_carrera` = `a`.`id_carrera`))
        JOIN `periodo` `d` ON (`d`.`id_periodo` = `b`.`id_periodo`))
    WHERE
        `b`.`id_periodo` IN (SELECT 
                `periodo`.`id_periodo`
            FROM
                `periodo`
            WHERE
                `periodo`.`activo` = 1)