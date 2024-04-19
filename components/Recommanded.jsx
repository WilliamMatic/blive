import React, { useCallback, useEffect, useState } from "react";

import {
  StyleSheet,
  View,
  SafeAreaView,
  StatusBar,
  Text,
  TextInput,
  TouchableOpacity,
  Alert,
  ActivityIndicator,
  Image,
  FlatList,
} from "react-native";

import {
  Entypo,
  AntDesign,
  FontAwesome5,
  FontAwesome,
  SimpleLineIcons,
  Ionicons,
} from "@expo/vector-icons";
const url = "https://balezi-group.net/blive/admins/assets/astuce/";

// Définition du composant enfant
export default function Recommanded({ navigation, route, recommanded, user }) {
  return (
    <FlatList
    style={{marginBottom: 145}}
      showsVerticalScrollIndicator={false}
      data={recommanded}
      renderItem={({ item }) => (
        <TouchableOpacity
          style={{
            width: "100%",
            flexDirection: "row",
            position: "relative",
            paddingBottom: 20,
            borderBlockColor: "gray",
            borderBottomWidth: 1,
            marginBottom: 20,
          }}
          onPress={() =>
            navigation.navigate("live", {
              id: item.youtube,
              titre: item.titre,
              description: item.contenue,
              user: user,
            })
          }
        >
          <Image
            style={{
              resizeMode: "cover",
              height: 170,
              width: 140,
              borderRadius: 5,
            }}
            source={{ uri: url + "" + item.avatar }}
          />
          <View style={{ marginLeft: 10 }}>
            <Text
              style={{
                color: "white",
                fontFamily: "Outfit_900Black",
                fontSize: 19,
                flexWrap: "wrap",
                marginBottom: 10,
                marginRight: 120,
              }}
              numberOfLines={1}
            >
              {item.titre.substring(0, 15) + "..."}
            </Text>
            <Text
              style={{
                color: "white",
                fontFamily: "Outfit_200ExtraLight",
                flexWrap: "wrap",
                marginBottom: 10,
              }}
            >
              Evènement{" "}
              <Text style={{ color: "#f29304" }}>{item.secteurname}</Text>
            </Text>
            <Text
              style={{
                color: "white",
                fontFamily: "Outfit_400Regular",
                flexWrap: "wrap",
                marginBottom: 10,
                marginRight: 120,
              }}
              numberOfLines={5}
            >
              {item.contenue}
            </Text>
            <Text
              style={{
                color: "white",
                fontFamily: "Outfit_400Regular",
                flexWrap: "wrap",
                position: "absolute",
                bottom: 0,
                fontSize: 10,
                color: "#f29304",
                alignItems: "center",
                justifyContent: "center",
              }}
            >
              <Entypo name="video" size={10} color="#f29304" />{" "}
              <Text>Régarder maintenant</Text>
            </Text>
          </View>
        </TouchableOpacity>
      )}
      keyExtractor={(item) => item.id}
    />
  );
}
