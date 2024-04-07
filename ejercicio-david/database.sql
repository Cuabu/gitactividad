CREATE DATABASE productos;

USE productos;

CREATE TABLE producto (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT
);


SELECT * FROM productos.producto;

INSERT INTO producto (nombre, descripcion) VALUES 
('Leche', 'Leche entera, 1 litro'),
('Pan', 'Pan de trigo integral, 500 gramos'),
('Huevos', 'Docena de huevos frescos'),
('Arroz', 'Arroz blanco, 1 kilogramo'),
('Fideos', 'Fideos de pasta larga, 500 gramos'),
('Aceite de Oliva', 'Aceite de oliva virgen extra, 1 litro'),
('Tomates', 'Tomates frescos, 500 gramos'),
('Papas', 'Papas blancas, 1 kilogramo'),
('Zanahorias', 'Zanahorias frescas, 500 gramos'),
('Cebollas', 'Cebollas amarillas, 500 gramos'),
('Manzanas', 'Manzanas rojas, 1 kilogramo'),
('Bananas', 'Bananas maduras, 1 kilogramo'),
('Pollo', 'Pechugas de pollo, 1 kilogramo'),
('Carne molida', 'Carne molida de res, 500 gramos'),
('Atún en lata', 'Atún en lata al natural, 200 gramos'),
('Queso', 'Queso cheddar, 250 gramos'),
('Yogur', 'Yogur natural, 500 gramos'),
('Pan integral', 'Pan de trigo integral, 500 gramos'),
('Galletas', 'Galletas integrales, 200 gramos'),
('Jamon', 'Jamon cocido, 200 gramos'),
('Mantequilla', 'Mantequilla sin sal, 200 gramos'),
('Pasta de dientes', 'Pasta de dientes, 100 gramos'),
('Cepillo de dientes', 'Cepillo de dientes, suave'),
('Jabón de manos', 'Jabón líquido para manos, 250 ml'),
('Shampoo', 'Shampoo para cabello normal, 400 ml'),
('Acondicionador', 'Acondicionador para cabello normal, 400 ml'),
('Detergente', 'Detergente líquido para ropa, 1 litro'),
('Esponja', 'Esponja para lavar platos'),
('Papel higiénico', 'Papel higiénico, 4 rollos'),
('Servilletas', 'Servilletas de papel, paquete de 50 unidades'),
('Café', 'Café molido, 250 gramos'),
('Azúcar', 'Azúcar blanca, 1 kilogramo'),
('Sal', 'Sal de mesa, 500 gramos'),
('Pimienta', 'Pimienta negra molida, 100 gramos'),
('Vinagre', 'Vinagre de vino tinto, 500 ml'),
('Salsa de tomate', 'Salsa de tomate, 500 gramos'),
('Mayonesa', 'Mayonesa, 500 gramos'),
('Mostaza', 'Mostaza, 200 gramos'),
('Ketchup', 'Ketchup, 500 gramos'),
('Miel', 'Miel pura de abeja, 500 gramos'),
('Aceitunas', 'Aceitunas verdes rellenas de pimiento, 250 gramos'),
('Almendras', 'Almendras naturales, 250 gramos'),
('Chocolate', 'Chocolate negro, 100 gramos'),
('Mermelada', 'Mermelada de fresa, 250 gramos'),
('Puré de tomate', 'Puré de tomate, 500 gramos');
