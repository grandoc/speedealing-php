<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$users = array(
		'CHARSET' => 'UTF-8',
		'UserCard' => 'Ficha de Usuário',
		'ContactCard' => 'Ficha de Contato',
		'GroupCard' => 'Ficha de Grupo',
		'NoContactCard' => 'Não existe nenhuma ficha dos contatos',
		'Permission' => 'Permissão',
		'Permissions' => 'Permissões',
		'EditPassword' => 'Modificar Senha',
		'SendNewPassword' => 'Enviar Nova Senha',
		'ReinitPassword' => 'Gerar Nova Senha',
		'PasswordChangedTo' => 'Senha Modificada em: %s',
		'SubjectNewPassword' => 'A sua Senha',
		'AvailableRights' => 'Permissões Disponíveis',
		'OwnedRights' => 'As Minhas Permissões',
		'GroupRights' => 'Permissões de Grupo',
		'UserRights' => 'Permissões de Usuário',
		'UserGUISetup' => 'Interface Usuário',
		'DisableUser' => 'Desativar',
		'DisableAUser' => 'Desativar um Usuário',
		'DeleteUser' => 'Eliminar',
		'DeleteAUser' => 'Eliminar um Usuário',
		'DisableGroup' => 'Desativar',
		'DisableAGroup' => 'Desativar um Grupo',
		'EnableAUser' => 'Reativar um Usuário',
		'EnableAGroup' => 'Reativar um Grupo',
		'DeleteGroup' => 'Eliminar',
		'DeleteAGroup' => 'Eliminar um Grupo',
		'ConfirmDisableUser' => 'Tem certeza que quer desativar o usuário <b>%s</b> ?',
		'ConfirmDisableGroup' => 'Tem certeza que quer desativar o grupo <b>%s</b> ?',
		'ConfirmDeleteUser' => 'Tem certeza que quer eliminar o usuário <b>%s</b> ?',
		'ConfirmDeleteGroup' => 'Tem certeza que quer eliminar o grupo <b>%s</b> ?',
		'ConfirmEnableUser' => 'Tem certeza que quer reativar o usuário <b>%s</b> ?',
		'ConfirmEnableGroup' => 'Tem certeza que quer reativar o grupo <b>%s</b> ?',
		'ConfirmReinitPassword' => 'Tem certeza que quer gerar uma nova senha o usuário <b>%s</b> ?',
		'ConfirmSendNewPassword' => 'Tem certeza que quer enviar uma nova senha o usuário <b>%s</b> ?',
		'NewUser' => 'Novo Usuário',
		'CreateUser' => 'Criar Usuário',
		'SearchAGroup' => 'Procurar um Grupo',
		'SearchAUser' => 'Procurar um Usuário',
		'LoginNotDefined' => 'O Usuário não está Definido',
		'NameNotDefined' => 'O Nome não está definido',
		'ListOfUsers' => 'Lista de Usuário',
		'Administrator' => 'Administrador',
		'SuperAdministrator' => 'Super Administrator',
		'SuperAdministratorDesc' => 'Global administrator',
		'AdministratorDesc' => 'Administrator\'s entity',
		'DefaultRights' => 'Permissões por Padrao',
		'DefaultRightsDesc' => 'Defina aqui as permissões por default, é decir: as permissões que se atribuirão automaticamente a um novo usuário no momento de a sua criação.',
		'DolibarrUsers' => 'Usuário',
		'LastName' => 'Apelidos',
		'FirstName' => 'Nome',
		'ListOfGroups' => 'Lista de Grupos',
		'NewGroup' => 'Novo Grupo',
		'CreateGroup' => 'Criar Grupo',
		'RemoveFromGroup' => 'Eliminar Grupo',
		'PasswordChangedAndSentTo' => 'Senha alterada e enviada a <b>%s</b>.',
		'PasswordChangeRequestSent' => 'Pedido para alterar a senha para <b>%s</b> enviada a <b>%s</b>.',
		'MenuUsersAndGroups' => 'Usuários e Grupos',
		'LastGroupsCreated' => 'Os %s últimos grupos criados',
		'LastUsersCreated' => 'Os %s últimos Usuários criados',
		'ShowGroup' => 'Ver grupo',
		'ShowUser' => 'Ver usuário',
		'NonAffectedUsers' => 'Usuários não destinados ao grupo',
		'UserModified' => 'Usuário corretamente modificado',
		'GroupModified' => 'Grupo %s Modificado',
		'PhotoFile' => 'Arquivo foto',
		'UserWithDolibarrAccess' => 'Usuário com acesso a Dolibarr',
		'ListOfUsersInGroup' => 'Lista de Usuários deste grupo',
		'ListOfGroupsForUser' => 'Lista de grupos deste usuário',
		'UsersToAdd' => 'Usuário a Adicionar a este grupo',
		'GroupsToAdd' => 'Grupos a Adicionar a este usuário',
		'NoLogin' => 'Sem Usuário',
		'LinkToCompanyContact' => 'Link to third party / contact',
		'LinkedToDolibarrMember' => 'Link to member',
		'LinkedToDolibarrUser' => 'Link to Dolibarr user',
		'LinkedToDolibarrThirdParty' => 'Link to Dolibarr third party',
		'CreateDolibarrLogin' => 'Criar uma Conta',
		'CreateDolibarrThirdParty' => 'Criar um Fornecedor',
		'LoginAccountDisable' => 'A conta está desativada, indique um Novo login para a ativar.',
		'LoginAccountDisableInDolibarr' => 'A conta está desativada no Dolibarr',
		'LoginAccountDisableInLdap' => 'A conta está desativada ao domínio',
		'UsePersonalValue' => 'Utilizar valores personalizados',
		'GuiLanguage' => 'Idioma do Interface',
		'InternalUser' => 'Usuário Interno',
		'MyInformations' => 'A Minha Informação',
		'ExportDataset_user_1' => 'Usuários e Atributos',
		'DomainUser' => 'Usuário de Domínio',
		'Reactivate' => 'Reativar',
		'CreateInternalUserDesc' => 'Esta janela permite criar um usuário interno da sua Empresa/Instituição. Para criar um usuário externo (cliente, fornecedor...) use o botão \' Criar Usuário\' que se encontra na ficha de contato do fornecedor em questão.',
		'InternalExternalDesc' => 'Um usuário <b>interno</b> é um usuário que pertence à sua Empresa/Instituição.<br>Um usuário <b>externo</b> é um usuário cliente, fornecedor ou outro.<br><br>Nos 2 casos, as permissões de Usuários definem os direitos de acesso, mas o usuário externo pode além disso ter  um gerente de menus diferente do usuário interno (ver Inicio - configuração - visualização)',
		'PermissionInheritedFromAGroup' => 'A permissão dá-se já que o herda de um grupo ao qual pertence o usuário.',
		'Inherited' => 'Inherited',
		'UserWillBeInternalUser' => 'Created user will be an internal user (because not linked to a particular third party)',
		'UserWillBeExternalUser' => 'Created user will be an external user (because linked to a particular third party)',
		'IdPhoneCaller' => 'ID chamador (telefone)',
		'UserLogged' => 'Usuário %s Conectado',
		'UserLogoff' => 'User %s logout',
		'NewUserCreated' => 'Usuário %s  Criado',
		'NewUserPassword' => 'Senha alterada para %s',
		'EventUserModified' => 'Usuário %s Modificado',
		'UserDisabled' => 'Usuário %s Desativado',
		'UserEnabled' => 'Usuário %s Ativado',
		'UserDeleted' => 'Usuário %s Eliminado',
		'NewGroupCreated' => 'Grupo %s Criado',
		'GroupModified' => 'Grupo %s Modificado',
		'GroupDeleted' => 'Grupo %s Eliminado',
		'ConfirmCreateContact' => 'Tem certeza que quer criar uma conta para este contato?',
		'ConfirmCreateLogin' => 'Tem certeza de que deseja criar uma conta para este membro?',
		'ConfirmCreateThirdParty' => 'Tem certeza que quer criar um Fornecedor para este membro?',
		'LoginToCreate' => 'Login a Criar',
		'NameToCreate' => 'Nome do Fornecedor a Criar',
		'YourRole' => 'Your roles',
		'YourQuotaOfUsersIsReached' => 'Your quota of active users is reached !',
		'NbOfUsers' => 'Nb of users',
		'DontDowngradeSuperAdmin' => 'Only a superadmin can downgrade a superadmin',
		'NewDatabase' => 'Nouvelle base de données',
		'CreateDatabase' => 'Créer la base de données',
		'ListOfDatabases' => 'Liste des bases de données',
		'ListOfUsersInDatabase' => 'Liste des utilisateurs liés à la base de données',
		'ListOfRolesInDatabase' => 'Liste des groupes liés à la base de données',
		'DeleteADatabase' => 'Suppression d\'une database',
		'ConfirmDatabase' => 'Êtes-vous sûr de vouloir supprimer la base de données <b>%s</b> ?',
		'NonAffectedGroupsDatabase' => 'Groupes non affectés à la base de données',
		'NonAffectedUsersDatabase' => 'Utilisateurs non affectés à la base de données',
		'Collaborators' => 'Collaborateurs',
		'Profiles' => 'Profils collaborateurs'
);
?>