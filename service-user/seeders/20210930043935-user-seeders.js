'use strict';
const bcrypt = require('bcrypt');

module.exports = {
  up: async (queryInterface, Sequelize) => {
    
      await queryInterface.bulkInsert('users', [
        {
       name: "fadel",
       profession:"Admin Micro",
       role: "admin",
       email: "fadel.syahbana79@gmail.com",
       password: await bcrypt.hash('rahasia1234', 10),
       created_at: new Date(),
       updated_at: new Date()
     },

     {
      name: "wahyu",
      profession:"Front End",
      role: "student",
      email: "blackstrowd@gmail.com",
      password: await bcrypt.hash('rahasiaku1234', 10),
      created_at: new Date(),
      updated_at: new Date()
    }
    ]);
    
  },

  down: async (queryInterface, Sequelize) => {
   
      await queryInterface.bulkDelete('users', null, {});
     
  }
};
